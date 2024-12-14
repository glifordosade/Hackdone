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
        return view('dashboardPetani',[
            "title"=>"Dashboard Petani"
        ]);
    }

    // public fun
}
