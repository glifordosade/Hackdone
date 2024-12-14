<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RegistrasiController extends Controller
{

    public function showRegist(){
        return view("login",[
            "title"=>"Login"
        ]);
    }
    public function RegistProcess(Request $req): RedirectResponse
    {
        $valid = $req->validate([
            "nip"=>"required|min:18|max:18",
            "nama"=>"required|min:5|max:30",
            "biro"=>"required",
            "email"=>"required|string|email|max:255|unique:users",
            "pass"=> 'required|min:8',
        ],[
            'nip'=>[
                'required'=>'NIP wajib diisi',
                'min'=>'jumlah NIP kurang dari 18 karakter',
                'max'=>'jumlah NIP melebihi 18 karakter',
            ],
            'nama'=>[
                'required'=>'Nama wajib diisi',
                'min'=>'jumlah Nama kurang dari 5 karakter',
                'max'=>'jumlah Nama melebihi 30 karakter',
            ],
            'biro'=>[
                'required'=>'Nama wajib diisi',
            ],
            'email'=>[
                'required'=>'email wajib diisi',
            ],
            'pass'=>[
                'required'=>'Password wajib diisi',
                'min'=>'jumlah Password kurang dari 8 karakter',
            ]
        ]);



        $valid['pass'] = Hash::make($valid['pass']);
        $valid['biro'] = (int)$valid['biro'];
        $input = [
            "NIP_User" => $valid['nip'],
            "Nama_User" => $valid['nama'],
            "Password" => $valid['pass'],
            "email" => $valid['email'], // Pastikan ini terisi dengan benar
            "biro" => $valid['biro'],
        ];
        users::create($input);
        // dd($input);
        return redirect("/");

    }

}
