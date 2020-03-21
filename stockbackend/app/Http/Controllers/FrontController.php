<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front/index');
    }

    public function basic_info()
    {
        return view('front/basic_info');
    }

    public function news()
    {
        return view('front/news');
    }

    public function history()
    {
        return view('front/history');
    }
}
