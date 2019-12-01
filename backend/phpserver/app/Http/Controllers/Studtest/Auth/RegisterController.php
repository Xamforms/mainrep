<?php

namespace App\Http\Controllers\Studtest\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showregform ()
    {
            return view("registration");
    }

    function submitregform (Request $request)
    {
        $validatedData = $this->validate($request,[
            'email'=>'bail|required|email',
            'surname'=>'bail|required|alpha',
            'name'=>'bail|required|alpha',
            'patronymic'=>'bail|nullable|alpha',
            'role'=>'bail|required|in:student,teacher',
            'password'=>'bail|required|alpha_num|between:8,20|confirmed',
            'password_confirmation'=>'bail|required|alpha_num|between:8,20',
            'terms'=>'bail|accepted'
        ]);
        unset($validatedData['password_confirmation'], $validatedData['terms']);
        return $this->sendData($validatedData);
    }

    function sendData(array $validatedData)
    {
        $client = new Client([
            'base_uri' => 'localhost:8081',
            'headers' => ['Content-Type' => 'application/json'],
            'debug'=>fopen($_SERVER['DOCUMENT_ROOT']."/regrequest.log", "a")
        ]);
        $request = new Psr7\Request('POST', '/checkreg',
            ['body' => json_encode($validatedData)]);
        try {
            $response = $client->send($request);
            echo "Лог запроса:<br><br>";
            echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/regrequest.log");
            echo "<br><br>Ответ:<br><br>";
            echo $response->getBody() . "<br>";
            echo "Код ответа:<br>";
            echo $response->getStatusCode() . "<br>";
            $trueresp = json_decode($response->getBody(), true);
            if ($trueresp['status'] == "OK") {
                return redirect()->route('HomeRoute');
            } else {
                return back()->withInput();
            }
        } catch (Exception\GuzzleException $e) {
            echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/request.log");
            /*if ($e->hasResponse()) {
                echo $e->getResponse();
            }*/
            echo $e->getMessage();
            echo $e->getPrevious();
            echo $e->getCode();
        }
    }
}
