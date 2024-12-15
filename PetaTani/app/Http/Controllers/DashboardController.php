<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Landing(){
        return view('landing',[
            "title"=>"Dashboard"
        ]);
    }

    public function dashboardPetani(){
        return view('Petani.dashboardPetani',[
            "title"=>"Dashboard Petani"
        ]);
    }

    public function Beranda(){
        return view("konsumen.beranda",[
            "title"=>"Beranda"
        ]);
    }


    public function Produksi(){
        return view('Petani.Produksi',[
            "title"=>"Produksi"
        ]);
    }

    public function JualTani(){
        return view('Petani.Produk',[
            "title"=>"Produksi"
        ]);
    }
    public function tambah(){
        return view('Petani.tambahProduk',[
            "title"=>"Produksi"
        ]);
    }

    public function Sumber(){
        return view('Petani.resource',[
            'title'=>"Resource"
        ]);
    }


    public function AdminDash(){
        return view('pemerintah.dashboard',[
            'title'=>"Dashboard Admin"
        ]);
    }

    
}
