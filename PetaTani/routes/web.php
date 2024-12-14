<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');});


Route::controller(LoginController::class)->group(function(){
    Route::get('/login', "showLogin");
    Route::post('/LoginProcess', "LoginProcess");
    Route::get('/logout', "Logout");
    Route::get('/logout', "Logout");
});


