<?php

namespace App\Http\Controllers;

use App\Models\Pangan;
// use Illuminate\Support\Facades\DB;

// use App\Models\Pangan;
// use App\Http\Requests\StorePanganRequest;
// use App\Http\Requests\UpdatePanganRequest;

class PanganController extends Controller
{
    public function pangan(){
        $json = file_get_contents(public_path('data/datasayur.json'));
        $data = json_decode($json, true);
        dd($data);


        // $S = 0;
        // for ($i=0; $i < 1; $i++) { 
        //     for ($j=0; $j < count($data[$i]) ; $j++) { 
                
        //         foreach ($data[$j] as $jenis_sayuran => $jumlah_sayuran) {
        //             if ($jenis_sayuran == 'Kode') {
        //                 continue;
        //             }
        //             Pangan::create([
        //                 'Jenis_Pangan' => $jenis_sayuran,
        //                 'Jumlah' => $this->strip($jumlah_sayuran),
        //                 'Tahun' => 2023,
        //                 'ID_Provinsi' => $data[$j]['Kode']
        //             ]);
        //         }
        //         $S++;
        //     }
        // }

    }


    
}
