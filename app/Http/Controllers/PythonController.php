<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    // public function test5()
    // {

    //     $no = "2330.TW";
    //     $begin_dt = "2019-01-01";
    //     $end_dt = "2019-01-30";

    //     $jsondata5= shell_exec("python python/test.py $no $begin_dt $end_dt");

    //     $st_word = stripos($jsondata5,"completed") + 9;

    //     $data= json_decode(substr($jsondata5, $st_word));

    //     return view('front/chart',compact('data'));
    // }


    // 財金資料串接
    public function stock()
    {
        return view('stock/inputpython');
    }

    public function stock_store(Request $request)
    {
        $stock_data = $request->all();
        // 股票資料
        $no = $stock_data["stock_id"];
        $begin_dt = $stock_data["stock_begin_dt"];
        $end_dt = $stock_data["stock_end_dt"];

        $jsondata5= shell_exec("python python/test.py $no $begin_dt $end_dt");
        // dd($jsondata5);
        // 先找到completed的字串位置從起始到結束有幾個
        $st_word = stripos($jsondata5, "completed") + 9;
        $data = json_decode(substr($jsondata5, $st_word));
        // dd($data);
        return view('stock/chart', compact('data'));
        // python結束

    }

    public function bband()
    {

        $no = "2330.TW";
        $begin_dt = "2019-01-01";
        $end_dt = "2019-01-30";

        $jsondata5= shell_exec("python python/bband_v2.py $no $begin_dt $end_dt");

        // dd($jsondata5);

        $st_word = stripos($jsondata5,"completed") + 9;
        // dd($st_word);
        // $data= substr($jsondata5, $st_word);
        $data= json_decode(substr($jsondata5, $st_word));

        // dd($data);

        return view('stock/chart_bband',compact('data'));
    }

    public function test()
    {

        $jsondata= shell_exec("python python/test_v1.py");
    
        $st_word = stripos($jsondata, "completed") + 9;

        $data = json_decode(substr($jsondata, $st_word));


        return view('stock/test', compact('data'));
    }

    public function BBands()
    {

        $jsondata= shell_exec("python python/bband_finaltest.py");

        $st_word = stripos($jsondata, "completed") + 9;

        $data = json_decode(substr($jsondata, $st_word));



        return view('stock/BBands', compact('data'));

    }

}
