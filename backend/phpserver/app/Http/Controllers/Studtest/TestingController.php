<?php

namespace App\Http\Controllers\Studtest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function showgreeting ()
    {
        return view('test.test-greeting');
    }

    function showtestquestion ()
    {
        return view('test.test');
    }

    function showtestresult ()
    {
        return view('test.test-result');
    }
}
