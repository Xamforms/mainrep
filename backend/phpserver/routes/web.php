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

Route::get('/lk', 'Studtest\LKController@chooselk');

Route::get('/login', function (){return redirect('/home');});

Route::get('/registration', 'Studtest\Auth\RegisterController@showregform');

Route::post('/registration/newuser', 'Studtest\Auth\RegisterController@submitregform');

Route::post('/home/login', 'Studtest\Auth\LoginController@submitlogform');

Route::get('/lk/constructor', 'Studtest\ConstructorController@showconstructor');

Route::post('/lk/constructor/createtest', 'Studtest\ConstructorController@edittest');

Route::post('/lk/constructor/testedit', 'Studtest\ConstructorController@edittest');

Route::post('/lk/starttest', 'Studtest\TestingController@showgreeting');

Route::post('/lk/starttest/testing', 'Studtest\TestingController@showtestquestion');

Route::post('/lk/starttest/finishtest', 'Studtest\TestingController@showtestresult');
