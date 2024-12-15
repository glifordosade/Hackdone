<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

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

        $input['email']= $valid['email'];
        $input['password']= $valid['password'];

        $role = User::select("Role")->where("email",'=',$valid['email'])->first();


        if(Auth::attempt($input)){
            $req->session()->regenerate();
            if ($role->Role == 1) {
                return redirect('/adminD');
            }elseif ($role->Role == 2) {
                return redirect('/BerandaPetani');
            }else{
                return redirect('/BerandaKonsumen');
            }
        }
        return back()->with('gagal','Login anda gagal');
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



