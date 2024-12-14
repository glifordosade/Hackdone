<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanganController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->group(function(){
    Route::get('/', "Landing");
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', "showLogin"); //menampilkan halaman login
    Route::post('/LoginProcess', "LoginProcess"); //memproses login
    Route::get('/logout', "Logout"); //proses logout
});

Route::controller(RegistrasiController::class)->group(function(){
    Route::get("/Registrasi","showRegist");
    Route::get("/RegistProcess","RegistProcess");
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/navbarM', function () {
    return view('baseLayout/NavbarMasyarakat',['title'=>"NavbarMasyarakat"]);
});

Route::get("/data",[PanganController::class,"pangan"]);
