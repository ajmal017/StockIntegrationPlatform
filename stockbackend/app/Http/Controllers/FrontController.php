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

    // public function basic_info(Request $request)
    // {
    //     return view('front/basic_info');
    // }

    public function basic_info()
    {

        $no = "2330.TW";
        $begin_dt = "2019-01-01";
        $end_dt = "2019-01-30";

        $jsondata5= shell_exec("python python/historical_stock.py $no $begin_dt $end_dt");
        // dd($jsondata5);
        // 先找到completed的字串位置從起始到結束有幾個
        $st_word = stripos($jsondata5, "completed") + 9;
        $data = json_decode(substr($jsondata5, $st_word));

        //******************************************************************************* */
        $jsondata= shell_exec("python python/bband_finaltest.py $no $begin_dt $end_dt");
        $st_word = stripos($jsondata, "completed") + 9;
        $data_backtest = json_decode(substr($jsondata, $st_word));

        //******************************************************************************* */
        $jsonbasic = shell_exec("python python/crawl_news.py");
        // dd($jsonbasic);
        $data_news = json_decode($jsonbasic);
        // dd($data_news);

        //******************************************************************************* */



        // $jsonbasic = shell_exec("python python/basic_info.py");
        // // dd($jsonbasic);
        // $data_basic = json_decode($jsonbasic);
        // dd($data_basic);
        return view('front/basic_info', compact('data_news','data','data_backtest'));
    }


    // 歷史資料串接
    // public function historical_stock(Request $request)
    // {
    //     // $stock_data = $request->all();
    //     // 股票資料
    //     // $no = $stock_data["stock_id"];
    //     // $begin_dt = $stock_data["stock_begin_dt"];
    //     // $end_dt = $stock_data["stock_end_dt"];
    //     $no = "2330.TW";
    //     $begin_dt = "2019-01-01";
    //     $end_dt = "2019-01-30";
    //     $jsondata5= shell_exec("python python/historical_stock.py $no $begin_dt $end_dt");
    //     // dd($jsondata5);
    //     // 先找到completed的字串位置從起始到結束有幾個
    //     $st_word = stripos($jsondata5, "completed") + 9;
    //     $data = json_decode(substr($jsondata5, $st_word));

    //     // dd($data);
    //     return view('front/basic_info', compact('data'));
    //     // python結束
    // }

    // 回測
    // public function BBands()
    // {

    //     $no = "2330.TW";
    //     $begin_dt = "2019-01-01";
    //     $end_dt = "2019-01-30";

    //     $jsondata= shell_exec("python python/bband_finaltest.py $no $begin_dt $end_dt");
    //     $st_word = stripos($jsondata, "completed") + 9;
    //     $data = json_decode(substr($jsondata, $st_word));

    //     return view('front/basic_info', compact('data'));
    // }




}
