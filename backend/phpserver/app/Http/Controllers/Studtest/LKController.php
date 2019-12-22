<?php

namespace App\Http\Controllers\Studtest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LKController extends Controller
{
    function chooselk(Request $request)
    {
        if (session('role') == 'student') {
            return view('lk.stud.lk-stud');
        } else if (session('role') == 'teacher') {
            return view('lk.teach.lk-teach');
        } else {
            return back()->withInput();
        }
    }
}
