<?php

namespace Database\Seeders;

use App\Models\Pangan;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(public_path('lala/datasayur.json'));
        $data = json_decode($json, true);


        for ($i=0; $i < 2 ; $i++) { 
            for ($j=0; $j < count($data[$i]) ; $j++) { 
                
                foreach ($data[$j] as $jenis_sayuran => $jumlah_sayuran) {
                    if ($jenis_sayuran == 'Kode') {
                        continue; // Skip this iteration if it's the 'Kode' key
                    }
                    Pangan::create([
                        'Jenis_Pangan' => $jenis_sayuran,
                        'Jumlah' => $this->strip($jumlah_sayuran),
                        'Tahun' => 2023,
                        'ID_Provinsi' => $data[$j]['Kode']
                    ]);
                }
            }
        }
    }

    public function strip($s){
        if($s == "-"){
            return 0;
        }
        return $s;
    }
}
