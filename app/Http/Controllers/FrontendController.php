<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Province;
use App\Models\Value;
use App\Models\Year;
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


        $child = Child::where('parent_id',3)->get();
        $child_2 = Child::where('parent_id',4)->get();
        return view('statistik', compact('child','child_2'));
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

    public function tes123($id)
    {
        $child = Child::with('value.year','value.province')->find($id);
        $province = Province::all();
        $year = Year::with(['value' => function ($q) use ($id) {
            $q->where('children_id', $id);
        }])->whereIn('id',[6,7,8,9])->get();
        $prov = [];
        $data = [];

        foreach ($province as $item) {
            array_push($prov,$item->name);
        }

        foreach ($year as $item) {

            $b = [];
            foreach ($province as $p) {
                $val = Value::where('province_id',$p->id)->where('children_id',$id)->where('year_id',$item->id)->first();
                array_push($b,$val->value);
            }

            $data[] = ([
                'name' => $item->year,
                'data' => $b,
            ]);
        }

        $res = (object)array(
            'pro' => $prov,
            'data' => $data,
        );

        $a = response()->json($res);
        return $a;
    }

    public function tes456($id)
    {
        //$child = Child::with('value.year','value.province')->find($id);
        $province = Province::all();
        $year = Year::with(['value' => function ($q) use ($id) {
            $q->where('children_id', $id);
        }])->whereIn('id',[7,8,9])->get();
        $prov = [];
        $data = [];

        foreach ($province as $item) {
            array_push($prov,$item->name);
        }

        foreach ($year as $item) {

            $b = [];
            foreach ($province as $p) {
                $val = Value::where('province_id',$p->id)->where('children_id',$id)->where('year_id',$item->id)->first();
                array_push($b,$val->value);
            }

            $data[] = ([
                'name' => $item->year,
                'data' => $b,
            ]);
        }

        $res = (object)array(
            'pro' => $prov,
            'data' => $data,
        );

        $a = response()->json($res);
        return $a;
    }

    public function tes78d9()
    {
        $province = Province::all();

        $prov = [];
        foreach ($province as $item) {
            array_push($prov,$item->name);
        }

        //$val = Value::with('children')->whereIn('children_id',[16,17])->where('province_id',$province)->get();
        $val = Child::whereIn('id',[16,17])->get();
        $data = [];

        foreach ($val as $item) {

            $b = [];
            foreach ($province as $pr) {
                $s = Value::where('children_id',$item->id)->where('province_id',$pr->id)->where('year_id',9)->first();
                array_push($b,$s->value);
            }

            $data[] = ([
                'name' => $item->name,
                'data' => $b,
            ]);
        }

        $res = (object)array(
            'pro' => $prov,
            'data' => $data,
        );

        $a = response()->json($res);

        return $a;
    }

    public function tes789()
    {
        $province = Province::all();
        $data = [];
        foreach ($province as $item) {
            $data[] = ([
                'name' => $item->name,
                'color' => $b,
            ]);
        }




        $val = Value::whereIn('children_id',[16,17])->where('year_id',9)->with('children','province')->get();
        return $val;
    }

    public function wkwk()
    {
        $province = Province::all();

        $prov = [];
        foreach ($province as $item) {
            array_push($prov,$item->name);
        }

        $val = Child::where('parent_id',6)->get();
        $data = [];

        foreach ($val as $item) {

            $b = [];
            foreach ($province as $pr) {
                $s = Value::where('children_id',$item->id)->where('province_id',$pr->id)->where('year_id',9)->first();
                array_push($b,$s->value);
            }

            $data[] = ([
                'name' => $item->name,
                'data' => $b,
            ]);
        }

        $res = (object)array(
            'pro' => $prov,
            'data' => $data,
        );

        $a = response()->json($res);

        return $a;
    }


}
