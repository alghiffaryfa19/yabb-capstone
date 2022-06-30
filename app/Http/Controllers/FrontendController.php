<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $child = Child::with('value.year')->whereRelation('parents','id',1)->get();
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

    public function asean()
    {
        //$child = Child::with('value.year')->whereRelation('parents','id',1)->get();
        $value = Value::whereRelation('children.parents','id',2)->get();
        //return $value;
        $data = [];

        foreach ($value as $item) {

            if ($item->main == 1) {
                $vars = (object)array(
                    'fill' => "#DC6967",
                );
            } else {
                $vars = (object)array(
                    'fill' => "#67B7DC",
                );
            }



            $data[] = ([
                'country' => $item->title,
                'visits' => $item->value,
                'icon' => "https://www.amcharts.com/wp-content/uploads/flags/".Str::slug($item->title).".svg",
                'columnSettings' => $vars,
            ]);
        }

        $a = response()->json($data);
        return $a;
    }


}
