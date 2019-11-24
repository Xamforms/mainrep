<?php

namespace App\Http\Controllers\Studtest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LKController extends Controller
{
    function showlk (Request $request)
    {
        return view('home');
    }
}
