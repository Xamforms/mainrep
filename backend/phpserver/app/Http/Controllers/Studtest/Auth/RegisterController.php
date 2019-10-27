<?php

namespace App\Http\Controllers\Studtest\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showpage (Request $request)
    {
            return view("registration");
    }

    function submitform (Request $request)
    {
        $this->validate($request,[
           'email'=>'bail|required|email',
           'lastname'=>'bail|required|alpha',
           'firstname'=>'bail|required|alpha',
           'patronymic'=>'bail|nullable|alpha',
           'standing'=>'bail|required',
           'password'=>'bail|required|alpha_num|confirmed|digits_between:4,20',
           'repeatpassword'=>'bail|required|digits_between:4,20',
           'terms'=>'accepted'
           ]);
    }
}
