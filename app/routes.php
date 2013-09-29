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
Route::resource('books', 'BookController');
Route::group(["before" => "guest"], function()
{
    Route::get("/login", function() {
        return View::make('user/login');
    });

    Route::post("/login", [
        "as"   => "user/login",
        "uses" => "UserController@loginAction"
    ]);

    Route::get("/register", function() {
        return View::make('user.register');
    });

    Route::post("/register", [
        "as"     => "user/register",
        "uses"   => "RegisterController@store"
    ]);
});
Route::group(["before" => "auth"], function()
{
    Route::post("/", [
        "as"   => "books/store",
        "uses" => "BookController@store"
    ]);
    Route::any("/profile", [
        "as"   => "user/profile",
        "uses" => "UserController@profileAction"
    ]);
    Route::any("/logout", [
        "as"   => "user/logout",
        "uses" => "UserController@logoutAction"
    ]);
});