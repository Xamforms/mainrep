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

Route::get('/lk/constructor', 'Studtest\ConstructorController@showConstructor');

Route::post('/lk/constructor/addquestion', 'Studtest\ConstructorController@addQuestion');

Route::post('/lk/constructor/deletequestion', 'Studtest\ConstructorController@deleteQuestion');

Route::post('/lk/constructor/editquestion', 'Studtest\ConstructorController@editQuestion');

Route::post('/lk/constructor/editquestion/addanswers', 'Studtest\ConstructorController@addAnswers');

Route::post('/lk/constructor/editquestion/setanswers', 'Studtest\ConstructorController@setAnswers');

Route::post('/lk/constructor/sendtest', 'Studtest\ConstructorController@sendTest');

Route::post('/lk/starttest', 'Studtest\TestingController@showgreeting');

Route::post('/lk/starttest/testing', 'Studtest\TestingController@showtestquestion');

Route::post('/lk/starttest/finishtest', 'Studtest\TestingController@showtestresult');
