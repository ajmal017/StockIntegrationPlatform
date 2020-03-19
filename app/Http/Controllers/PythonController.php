<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function test5()
    {

        $no = "1110.TW";
        $begin_dt = "2019-03-01";
        $end_dt = "2019-10-01";

        $jsondata5= shell_exec("python python/test.py $no $begin_dt $end_dt");

        $st_word = stripos($jsondata5,"completed") + 9;

        $data= json_decode(substr($jsondata5, $st_word));

        return view('front/chart',compact('data'));
    }
}
