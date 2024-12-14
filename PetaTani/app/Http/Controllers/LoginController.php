<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view("Login",[
            "title"=>"Login"
        ]);
    }

    public function LoginProcess(Request $req): RedirectResponse
    {
        $valid = $req->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email'=>[
                'required'=>'email belum dimasukkan',
            ],
            'password'=>[
                'required'=>'Password belum dimasukkan',
            ]
        ]);

        $input['NIP_User']= $valid['username'];
        $input['password']= $valid['password'];

        if(Auth::attempt($input)){
            $req->session()->regenerate();
            return redirect('/');
        }

        return back()->with('loginError','Login anda gagal');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showResource(){
        return view("Petani/resource",[
            "title"=>"Resource"
        ]);
    }

}



