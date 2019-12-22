<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
include ($_SERVER['DOCUMENT_ROOT'].'resources/php/test.php');

class ConstructorController extends Controller
{
    function showConstructor ()
    {
        return view('lk.constructor');
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
