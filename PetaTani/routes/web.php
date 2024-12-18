<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrasiController;

Route::controller(DashboardController::class)->group(function(){
    Route::get('/', "Landing");
    Route::get('/BerandaPetani', "dashboardPetani");
    Route::get('/BerandaKonsumen', "Beranda");
    Route::get('/Produksi', "Produksi");
    Route::get('/jualtani', "JualTani");
    Route::get('/tambah', "tambah");
    Route::get('/resource', "Sumber");
    Route::get('/adminD', "AdminDash");
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', "showLogin"); //menampilkan halaman login
    Route::post('/LoginProcess', "LoginProcess"); //memproses login
    Route::get('/logout', "Logout");//proses logout
});

Route::controller(RegistrasiController::class)->group(function(){
    Route::get("/RegistrasiP","showRegistP");
    Route::get("/RegistrasiK","showRegistK");
    Route::post("/RegistProcess","RegistProcess");
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



Route::get('/map', function () {
    return view('map');
});

Route::get('/navbarM', function () {
    return view('baseLayout/NavbarMasyarakat',['title'=>"NavbarMasyarakat"]);
});


Route::get('/berandaMasyarakat', function () {
    return view('masyarakat/beranda',['title'=>"NavbarMasyarakat"]);
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

Route::get('/regions-colors', [mapController::class, 'getJumlah']);
Route::get('/register', function () {
    return view('register',['title'=>"NavbarMasyarakat"]);
});



Route::get('/dashboardP', function () {
    return view('pemerintah/dashboard',['title'=>"NavbarPemerintah"]);
});

Route::get('/produk', function () {
    return view('konsumen/produk',['title'=>"NavbarPemerintah"]);
});


Route::get('/transaksi', function () {
    return view('konsumen/transaksi',['title'=>"NavbarPemerintah"]);
});

Route::get('/checkout', function () {
    return view('konsumen/checkout',['title'=>"NavbarPemerintah"]);
});

Route::get('/dashboardPetani', function () {
    return view('Petani/dashboardPetani',['title'=>"NavbarPemerintah"]);
});



Route::get('/produksi', function () {
    return view('Petani/Produksi',['title'=>"Produksi"]);
});


Route::get('/dataProduk', function () {
    return view('Petani/produk',['title'=>"NavbarPemerintah"]);
});

