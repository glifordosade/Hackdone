<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pass = "12345678";
        $sandi = Hash::make($pass);
        
        User::create([
            "Nama"=>"Admin",
            "email"=>"kementan@gmail.com",
            "password"=>$sandi,
            "Role"=>1,
        ]);
    }
}
