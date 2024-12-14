<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
    return view('hai');
});

Route::get('/login', function () {
    return view('Login');
});
