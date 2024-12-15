<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{

    public function showRegistP(){
        return view("Registrasi",[
            "title"=>"Registrasi Petani"
        ]);
    }

    public function showRegistK(){
        return view("RegistrasiK",[
            "title"=>"Registrasi Konsumen"
        ]);
    }

    public function RegistProcess(Request $req)
    {
        $valid = $req->validate([
            "email"=>"required|string|email|unique:users",
            "nama"=>"required",
            "role"=>"required",
            "password"=> 'required|min:8',
        ],[
            'email'=>[
                'required'=>'email wajib diisi',
            ],
            'nama'=>[
                'required'=>'Nama wajib diisi',
            ],
            'role'=>[
                'required'=>'role',
            ],
            'password'=>[
                'required'=>'Password wajib diisi',
                'min'=>'jumlah Password kurang dari 8 karakter',
            ]
        ]);


        // dd($valid);
        $valid['password'] = Hash::make($valid['password']);
        $role = (int)$valid['role'];
        $input = [
            "email" => $valid['email'],
            "Nama" => $valid['nama'],
            "Role" => $role,
            "password" => $valid['password'],
        ];
        User::create($input);
        return redirect("/login");
    }

}
