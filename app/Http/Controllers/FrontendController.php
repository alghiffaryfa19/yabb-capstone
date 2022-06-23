<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function statistik()
    {


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
