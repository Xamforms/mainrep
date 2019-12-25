<?php

namespace App\Http\Controllers\Studtest;
include 'E:\Projects\GIT\mainrep\backend\phpserver\resources\php\test.php';

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
            session([
                'test'=>
                    SomeTest::create()
            ]);
        }
        else
        {

        }
        return view('lk.teach.constructor.constructor');
    }

    function addQuestion (Request $request)
    {

    }

    function deleteQuestion (Request $request)
    {

    }

    function editQuestion (Request $request)
    {

    }

    function addAnswers (Request $request)
    {

    }

    function setAnswers (Request $request)
    {

    }

    function sendTest (Request $request)
    {

    }
}
?>
