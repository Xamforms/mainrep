<?php

namespace App\Http\Controllers\Studtest;
include 'E:\Projects\GIT\mainrep\backend\phpserver\resources\php\test.php';

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SomeTest;
class ConstructorController extends Controller
{
    function showConstructor (Request $request)
    {
        $constructormode = $this->validate($request,[
            'constructor'=>'required|in:edit,create'
        ]);
        if ($constructormode["constructor"]=='create')
        {
            session(['test'=> SomeTest::create()]);
        }
        else
        {

        }
        return view('lk.teach.constructor.constructor');
    }

    function addQuestion(Request $request)
    {
        $validatedquestion = $this->validate($request, [
            'question-score' => 'numeric',
            'question-text' => 'required|alpha_num'
        ]);
        session('test')->addQuestion($validatedquestion['question-text'], $validatedquestion['question-score']);
        return view('lk.teach.constructor.constructor');
    }

    function deleteQuestion(Request $request)
    {
        $validatedquestion = $this->validate($request, [
            'question-text' => 'required|alpha_num'
        ]);
        session('test')->removeQuestion($validatedquestion['question-text']);
        return view('lk.teach.constructor.constructor');
    }

    function editQuestion(Request $request)
    {

    }

    function addAnswers (Request $request)
    {

    }

    function sendTest (Request $request)
    {
        $validatedtest = $this->validate($request, [
            'test-name' => 'required|alpha_num',
            'test-cription' => 'alpha_num'
        ]);
        $client = new Client([
            'base_uri' => 'localhost:8081',
            'headers' => ['Content-Type' => 'application/json'],
            'debug'=>fopen($_SERVER['DOCUMENT_ROOT']."/regrequest.log", "a")
        ]);
        $request = new Psr7\Request('POST', '/checkreg',
            ['body' => json_encode(session('test'))]);
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
            echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/regrequest.log");
            /*if ($e->hasResponse()) {
                echo $e->getResponse();
            }*/
            echo $e->getMessage();
            echo $e->getPrevious();
            echo $e->getCode();
        }
    }
}
?>
