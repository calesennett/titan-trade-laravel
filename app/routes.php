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
Route::post('queue', function() {

    Queue::marshal();

});
/*
*
*
*   Avaiable to public
*
*
*/
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

/*
*
*
*   Avaiable to logged in users
*
*
*/

Route::group(["before" => "auth"], function()
{
    Route::get("/books/{slug}/request/{id}", function($slug, $id)
    {
        $book = Book::where('slug', $slug)->where('user_id', $id)->first();
        if (Auth::user() == $book->user) 
        {
            return Redirect::to('profile')->with('req_error', 'You cannot request your own book.');
        }
        Event::fire('book.request', [$book, Auth::user(), $book->user]);
        return Redirect::to('profile')->with('req_success', 'Book successfully requested');
    });

    Route::get('users/{user}', [

        "uses" => "UserController@show"

    ]);
    Route::get("/profile", [
        "as"   => "user/profile",
        "uses" => "UserController@profileAction"
    ]);
    Route::any("/logout", [
        "as"   => "user/logout",
        "uses" => "UserController@logoutAction"
    ]);
});
