<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function test5()
    {
        $a = 2330;
        
        $jsondata5= shell_exec("python python/test.py '".$a."' ");

        $st_word = stripos($jsondata5,"completed") + 9;

        $data= json_decode(substr($jsondata5, $st_word));

        return view('front/chart',compact('data'));
    }
}
