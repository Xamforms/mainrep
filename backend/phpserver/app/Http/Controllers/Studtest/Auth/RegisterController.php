<?php

namespace App\Http\Controllers\Studtest\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File; use Exception;
//use GuzzleHttp\Client;

class RegisterController extends Controller
{
    function showpage (Request $request)
    {
            return view("registration");
    }

    function storeuserdata (Request $request)
    {
       /* $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);*/
       echo $request->getContent();
    }
}
