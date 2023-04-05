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


// Asset Routes

Route::get("/dashboard/asset","Dashboard\AssetController@index");
Route::get("/dashboard/asset/create","Dashboard\AssetController@create");

// Room Routes

Route::get("/dashboard/room", "Dashboard\RoomController@index")->name("dashboard.room");
Route::get("/dashboard/room/detail", "Dashboard\RoomController@show")->name("room.detail");
Route::get("/dashboard/room/create","Dashboard\RoomController@create")->name("room.create");
Route::post("/dashboard/room/postRoom","Dashboard\RoomController@store");

// Assets Routes

Route::get("/dashboard/asset", "Dashboard\AssetController@index")->name("dashboard.asset");
Route::get("/dashboard/asset/create","Dashboard\AssetController@create")->name("asset.create");
Route::post("/dashboard/asset/postAsser","Dashboard\AssetController@store");

// Dashboard Routes

Route::get("/dashboard","Dashboard\MainController@index")->name("dashboard");

// Auth Routes

Route::post("/storeRegister","Auth\RegisterController@storeRegister");
Route::post("/postlogin","Auth\LoginController@postLogin");

Route::get("/logout","Auth\LoginController@logout");