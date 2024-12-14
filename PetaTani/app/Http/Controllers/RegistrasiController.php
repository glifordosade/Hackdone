<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{

    public function showRegist(){
        return view("Registrasi",[
            "title"=>"Registrasi"
        ]);
    }
    public function RegistProcess(Request $req)
    {
        $valid = $req->validate([
            "email"=>"required|string|email|unique:User",
            "nama"=>"required",
            "password"=> 'required|min:8',
        ],[
            'email'=>[
                'required'=>'email wajib diisi',
            ],
            'nama'=>[
                'required'=>'Nama wajib diisi',
                'min'=>'jumlah Nama kurang dari 5 karakter',
                'max'=>'jumlah Nama melebihi 30 karakter',
            ],
            'password'=>[
                'required'=>'Password wajib diisi',
                'min'=>'jumlah Password kurang dari 8 karakter',
            ]
        ]);



        $valid['password'] = Hash::make($valid['password']);
        $input = [
            "NIP_User" => $valid['nip'],
            "Nama" => $valid['nip'],
            "email" => $valid['nip'],
        ];
        User::create($input);
        return redirect("/Login");

    }

}
