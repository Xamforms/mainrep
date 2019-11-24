<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration/render/{rendertype}', function ($rendertype) {
    if ($rendertype = 'html')
        return File::get(public_path() . "/studtest/assets/html/registration.html"); //Без шаблонов
    elseif ($rendertype = 'blade')
        return view('registration'); //С шаблонами (html, php в одном файле и с подстановками)
});

Route::get('/home', 'Studtest\HomeController@showhome')->name('HomeRoute');

Route::get('/lk', 'Studtest\LKController@showlk');

Route::get('/registration', 'Studtest\Auth\RegisterController@showregform');

Route::post('/registration/newuser', 'Studtest\Auth\RegisterController@submitregform');

