<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//[START - return root page]
Route::get('/', function () {
    return view('welcome');
});
//[END - return root page]

//[START - return about-us page]
Route::get('/about-us', 'TestController@index');
//[END - return about-us page]

//[START - return register page]
Route::get('/register', 'RegisterController@index');
//[END - return register page]

//[START - post data and redirect to dashboard]
Route::post('/register', 'RegisterController@store');
//[END - post data and redirect to dashboard]

//[START - return dashboard page]
Route::get('/dashboard', 'DashboardController@index');
//[END - return dashboard page]
