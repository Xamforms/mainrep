<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SomeTest, Question;

class ConstructorController extends Controller
{
    function showConstructor (Request $request)
    {
        $constructormode = $this->validate($request,[
            'constructor'=>'required|in:edit,create'
        ]);
        if ($constructormode=='create')
        {
            session([
                'test'=> SomeTest::create()
            ]);
        }
        else
        {

        }
        return view('lk.teach.constructor.constructor');
    }

    function createTest (Request $request)
    {

    }

    function editTest (Request $request)
    {

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
