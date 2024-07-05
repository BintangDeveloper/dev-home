<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Laravel/welcome', function () {
    return view('welcome');
});
