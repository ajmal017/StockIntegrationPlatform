@extends('layouts/nav')

@section('css')

<link rel="stylesheet" href="{{asset('css/history.css')}}">

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

        <!-- 開始時間,結束時間 -->
        <div class="title-data d-flex justify-content-center">
            <div class="col-3">
                <span class="d-flex justify-content-center align-items-center color8">開始時間</span>
            </div>
            <div class="col-3">
                <span class="d-flex justify-content-center align-items-center color8">結束時間</span>
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <div class="col-12">
                <span class="d-flex justify-content-center align-items-center">content</span>
            </div>
        </div>
    </div>

</section>

@endsection
