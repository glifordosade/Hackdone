<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->group(function(){
    Route::get('/', "Landing");
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', "showLogin");
    Route::post('/LoginProcess', "LoginProcess");
    Route::get('/logout', "Logout");
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/navbarM', function () {
    return view('baseLayout/NavbarMasyarakat',['title'=>"NavbarMasyarakat"]);
});

Route::get('/navbarP', function () {
    return view('baseLayout/navbarPetani',['title'=>"dashboardPetani"]);
});

Route::get('/resource', function () {
    return view('Petani/resource',['title'=>"showResource"]);
});

Route::get('/produksi', function () {
    return view('Petani/Produksi',['title'=>"Produksi"]);
});




Route::get('/berandaM', function () {
    return view('masyarakat/beranda',['title'=>"NavbarMasyarakat"]);
});
