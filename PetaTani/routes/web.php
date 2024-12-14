<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mapController;
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

Route::get("/lala",[PanganController::class,"pangan"]);
Route::get('/navbarP', function () {
    return view('baseLayout/navbarPetani',['title'=>"dashboardPetani"]);
});






Route::get('/berandaMasyarakat', function () {
    return view('masyarakat/beranda',['title'=>"NavbarMasyarakat"]);
});

// routes/api.php
Route::get('/regions-colors', [mapController::class, 'getJumlah']);
Route::get('/register', function () {
    return view('register',['title'=>"NavbarMasyarakat"]);
});



Route::get('/dashboardP', function () {
    return view('pemerintah/dashboard',['title'=>"NavbarPemerintah"]);
});

Route::get('/produk', function () {
    return view('masyarakat/produk',['title'=>"NavbarPemerintah"]);
});


Route::get('/transaksi', function () {
    return view('masyarakat/transaksi',['title'=>"NavbarPemerintah"]);
});

Route::get('/checkout', function () {
    return view('masyarakat/checkout',['title'=>"NavbarPemerintah"]);
});

Route::get('/dashboardPetani', function () {
    return view('Petani/dashboardPetani',['title'=>"NavbarPemerintah"]);
});

Route::get('/resource', function () {
    return view('Petani/resource',['title'=>"showResource"]);
});

Route::get('/produksi', function () {
    return view('Petani/Produksi',['title'=>"Produksi"]);
});

Route::get('/tambahProduk', function () {
    return view('Petani/tambahProduk',['title'=>"NavbarPemerintah"]);
});

Route::get('/dataProduk', function () {
    return view('Petani/produk',['title'=>"NavbarPemerintah"]);
});

