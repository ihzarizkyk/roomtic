<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/","HomeController@index")->name("home");
Route::get("/login","Auth\LoginController@index")->name("login");
Route::get("/register","Auth\RegisterController@index");


// Room Routes

Route::get("/room", "Dashboard\RoomController@index")->name("room");
Route::get("/room/rent", "Dashboard\RoomController@detail");


// Dashboard Routes

Route::get("/dashboard","Dashboard\MainController@index")->name("dashboard");

// Auth Routes

Route::post("/storeRegister","Auth\RegisterController@storeRegister");
Route::post("/postlogin","Auth\LoginController@postLogin");

Route::get("/logout","Auth\LoginController@logout");