<?php

namespace App\Http\Controllers\Studtest\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception;

class LoginController extends Controller
{
    function submitlogform (Request $request)
    {
        $validatedData = $this->validate($request,[
            'signin_email'=>'bail|required|email',
            'signin_password'=>'bail|required|alpha_num|between:8,20',
            'remember_me'=>'in:on'
        ]);
         return $this->sendData($validatedData);
    }

    function sendData(array $validatedData)
    {
        $client = new Client([
            'base_uri' => 'localhost:8081',
            'headers' => ['Content-Type' => 'application/json'],
            'debug'=>fopen($_SERVER['DOCUMENT_ROOT']."/logrequest.log", "a")
        ]);
        $request = new Psr7\Request('POST', '/checklog',
            ['body' => json_encode($validatedData)]);
        try {
            $response = $client->send($request);
            echo "Лог запроса:<br><br>";
            echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/logrequest.log");
            echo "<br><br>Ответ:<br><br>";
            echo $response->getBody()."<br>";
            echo "Код ответа:<br>";
            echo $response->getStatusCode() . "<br>";
            $userdata = json_decode($response->getBody(), true);
            if ($userdata['status'] == "OK" && $userdata['role']=="student") {
                session([
                    'role' => $userdata['role'],
                    'allowed_tests' => json_decode($userdata['allowed_tests'],true),
                    'passed_tests' => json_decode($userdata['passed_tests'],true)
                ]);
                return redirect()->action('Studtest\LKController@chooselk');
            } else if ($userdata['status'] == "OK" && $userdata['role'] == "teacher") {
                session([
                    'role' => $userdata['role'],
                    'actual_tests' => json_decode($userdata['actual_tests'],true),
                    'deprecated_tests' => json_decode($userdata['deprecated_tests'],true),
                    'amount_of_groups' => $userdata['amount_of_groups'],
                    'amount_of_linkers' => 0
                ]);

                var_dump(session('deprecated_tests'));
                dd(session());
                return redirect()->action('Studtest\LKController@chooselk');
            } else {
                return back()->withInput();
            }
        } catch (Exception\GuzzleException $e) {
            echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/request.log");
            echo $e->getMessage();
            echo $e->getPrevious();
            echo $e->getCode();
        }
    }
}
