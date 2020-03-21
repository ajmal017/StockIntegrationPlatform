@extends('layouts/nav')

@section('css')

<link rel="stylesheet" href="{{asset('css/news.css')}}">

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

        <!-- 內容 -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB">《半導體》台積電2日填息達陣</span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span
                    class="d-flex justify-content-center align-items-center textB borderB">謝金河曝「國安基金護盤重點」竟淪為外資超級提款機</span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB">《DJ在線》新肺病毒侵門踏戶
                    護國神積也動搖？</span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span
                    class="d-flex justify-content-center align-items-center textB borderB">《盤中解析》護盤下猛藥，報復性反彈500點</span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB"></span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB"></span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB"></span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB"></span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB"></span>
            </div>

        </div>
        <!--  -->
        <div class="data d-flex flex-wrap justify-content-center">

            <div class="col-2">
                <span class="d-flex justify-content-center align-items-center textB borderB">2020/03/20</span>
            </div>

            <div class="col-8">
                <span class="d-flex justify-content-center align-items-center textB borderB"></span>
            </div>
        </div>
    </div>

</section>

@endsection
