<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(["before" => "guest"], function()
{
    Route::any("/", [
        "as"   => "user/login",
        "uses" => "UserController@loginAction"
    ]);
});
Route::group(["before" => "auth"], function()
{
    Route::any("/profile", [
        "as"   => "user/profile",
        "uses" => "UserController@profileAction"
    ]);
    Route::any("/logout", [
        "as"   => "user/logout",
        "uses" => "UserController@logoutAction"
    ]);
});