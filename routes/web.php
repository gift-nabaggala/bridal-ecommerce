<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});




//Authentication

Route::get('/', function () {
   return view('authentication/login');
});
Route::get('/', function () {
   return view('authentication/register');
});
Route::get('/', function () {
   return view('authentication/changePassword');
});
Route::get('/', function () {
   return view('authentication/deleteAccount');
});
Route::get('/', function () {
   return view('authentication/successForm');
});
Route::get('/', function () {
   return view('user');
});
