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


Route::get('/', function () {
    return view('welcome');
});

Route::get('signin', 'Member\\MemberController@signin');

Route::get('forgot-password', 'Member\\MemberController@forgotPassword');

Route::get('signup', 'Member\\MemberController@signup');

Route::group(['middleware' => 'auth'], function(){
    Route::get('me', function(){

    });
});
