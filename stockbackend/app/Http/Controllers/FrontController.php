<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front/index');
    }

    public function stock_ID_check(Request $request)
    {
        $id = $request->all();

        if($id) {
            //比對資料庫是否有這支股票
            $result = true;
        }
        else {
            $result = false;
        };


        return $result;
    }

    public function basic_info(Request $request)
    {
        
        return view('front/basic_info');
    }


}
