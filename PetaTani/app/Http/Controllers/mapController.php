<?php

namespace App\Http\Controllers;

use App\Models\Pangan;
use Illuminate\Http\Request;

class mapController extends Controller
{
    public function getJumlah()
    {
        // Fetch all regions from the database
        $regions = Pangan::all();  // Get all regions

        // Map the regions to return their color and hover_color
        $regionData = $regions->map(function ($regions) {
            return [
                'regionCode' => $regions->ID_Provinsi,  // You can use ID_Provinsi or any unique identifier
                'jumlah' => $regions->Jumlah,
            ];
        });

        return response()->json($regionData);  // Return the data as a JSON response
    }
}
