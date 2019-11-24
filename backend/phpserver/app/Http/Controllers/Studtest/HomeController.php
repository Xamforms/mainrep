<?php

namespace App\Http\Controllers\Studtest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function showhome (Request $request)
    {
        return view('home');
    }
}
