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

Route::controller("password", "RemindersController");

Route::get("/", array("as" => "home", "uses" => "HomeController@getIndex"));
Route::get("/register", array("as" => "register", "uses" => "RegisterController@getIndex"));
Route::post("/register", "RegisterController@postIndex");
Route::get("/login", array("as" => "login", "uses" => "SessionController@getLogin"));
Route::post("/login", "SessionController@postLogin");
Route::get("/logout", array("as" => "logout", "uses" => "SessionController@getLogout"));
Route::get("/profile/{name?}", array("as" => "profile", "uses" => "ProfileController@getIndex"));

Route::get("users", function()
{
    $users = User::all();

    return View::make("users")->with("users", $users);
});
