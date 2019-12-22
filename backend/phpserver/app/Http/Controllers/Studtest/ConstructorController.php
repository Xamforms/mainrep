<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    function showconstructor ()
    {
        return view('constructor');
    }
}
