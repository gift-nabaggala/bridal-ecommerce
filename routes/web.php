<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});

Route::get('/', function () {
    return view('authentication/signIn');
});
Route::get('/', function () {
    return view('authentication/login');
});
