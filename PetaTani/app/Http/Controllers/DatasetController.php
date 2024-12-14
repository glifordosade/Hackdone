<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class DatasetController extends Controller
{
    public function convertCsvToJson($filePath)
{
    // Read the CSV file
    $csvFile = fopen($filePath, 'r');
    $data = [];

    // Get the header row
    $headers = fgetcsv($csvFile);

    // Loop through each row and convert to an associative array
    while (($row = fgetcsv($csvFile)) !== false) {
        $data[] = array_combine($headers, $row);
    }

    fclose($csvFile);

    // Convert the data to JSON
    $json = json_encode($data, JSON_PRETTY_PRINT);

    // Save JSON to a file or return
    $jsonPath = storage_path('app/public/data.json');
    // Storage::put('public/data.json', $json);

    return response()->json(['message' => 'CSV successfully converted to JSON', 'json_path' => $jsonPath]);
}
}
