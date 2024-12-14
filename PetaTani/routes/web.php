<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hai');
});

Route::get('/login', function () {
    return view('Login');
});
