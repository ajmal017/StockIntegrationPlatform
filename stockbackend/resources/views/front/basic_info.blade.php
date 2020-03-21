@extends('layouts/nav')

@section('css')

<link rel="stylesheet" href="{{asset('css/basic_info.css')}}">

@endsection

@section('content')

<section class="container">

    <div class="row">
        <!-- tab-all -->
        <div class="tab-all d-flex">
            <div class="col-3">
                <a href="/basic_info"><button type="button" class="btn">基本資料</button></a>
            </div>
            <div class="col-3">
                <a href="/news"><button type="button" class="btn">新聞</button></a>
            </div>
            <div class="col-3">
                <a href="/history"><button type="button" class="btn">歷史股價</button></a>
            </div>
            <div class="col-3">
                <button type="button" class="btn">回測</button>
            </div>
        </div>

        <!-- 公司資料 -->
        <div class="title-data">
            <div class="col-12">
                <span class=" d-flex justify-content-center align-items-center color7">
                    公司資料
                </span>
            </div>
        </div>

        <!-- 基本資料,股東會及最近一年配股 -->
        <div class="title-data d-flex">
            <div class="col-6">
                <span class="d-flex justify-content-center align-items-center color8">基本資料</span>
            </div>
            <div class="col-6">
                <span class="d-flex justify-content-center align-items-center color8">股東會及最近一年配股</span>
            </div>
        </div>

        <!-- 內容 -->
        <div class="data d-flex flex-wrap">
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">產業類別</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">半導體  </span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">現金股利</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">9.50元</span>
            </div>
            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">成立時間</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">76/02/21</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">股東會日期</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">上市(櫃)時間</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">83/09/05</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">公積配股</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>

            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">董事長</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">劉德音</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">盈餘配股</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>

            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">總 經 理</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">魏哲家</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">股票股利</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center textB borderB">109/06/09</span>
            </div>
            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">營收比重</span>
            </div>
            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB">晶圓86.67%、其他13.33% (2019年)</span>
            </div>
        </div>

        <!-- 最新一季獲利能力 -->
        <div class="title-data d-flex">
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center color8">最新一季獲利能力</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center color8">最新四季每股盈餘</span>
            </div>
            <div class="col-4">
                <span class="d-flex justify-content-center align-items-center color8">最近四年每股盈餘</span>
            </div>
        </div>

        <!-- 內容 -->
        <div class="data d-flex flex-wrap">
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">營業毛利率</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">50.50%</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">第1季</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">107年</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>

            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">營業利益率</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">第2季</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">106年</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>

            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">稅前淨利率</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">第3季</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">105年</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>

            <!--  -->
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">資產報酬率</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">第4季</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">104年</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">-</span>
            </div>
        </div>

        <!-- 除 權 息 資 料 -->
        <div class="title-data d-flex">
            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center color8">除 權 息 資 料</span>
            </div>
        </div>

        <!-- 內容 -->
        <div class="data d-flex flex-wrap">
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">除權日期</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">109/06/09</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center color9 textW borderR">除息日期</span>
            </div>
            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">109/06/09</span>
            </div>
        </div>
    </div>

</section>

@endsection
