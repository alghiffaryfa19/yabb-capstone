<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function statistik()
    {

        // $json = file_get_contents(public_path('indonesia-prov.geojson'));

        // // Decode the JSON file
        // $json_data = json_decode($json,true);

        // // Display data
        // $data = [];
        // foreach ($json_data['features'] as $item) {

        //     $geometry = (object)array(
        //         'type' => $item["geometry"]['type'],
        //         'coordinates' => $item["geometry"]['coordinates'],
        //     );

        //     $data[] = ([
        //         //'type' => $item['type'],
        //         'provinsi' => $item["properties"]['Propinsi'],
        //         //'geometry' => $geometry,
        //         // 'koordinat' => $item["properties"]['Propinsi'],
        //     ]);
        // }

        //return $data;


        return view('statistik');
        //return $a;
    }

    public function data()
    {
        $child = Child::with('value.year')->get();
        $data = [];

        foreach ($child as $item) {

            $dataPoints = [];
            foreach ($item->value as $val) {
                array_push($dataPoints,$val->value);
            }

            $data[] = ([
                'name' => $item->name,
                'data' => $dataPoints,
            ]);
        }

        $a = response()->json($data);
        return $a;
    }


}
