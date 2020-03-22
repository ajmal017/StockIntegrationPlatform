@extends('layouts/nav')

@section('css')
    <link rel="stylesheet" href="./css/index.css">
@endsection

@section('content')
<section class="container-all d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="search-box col-4">
                <h1>輕鬆投</h1>
                <h3>智能投資</h3>
                <form action="">
                    <div class="col-12 form-group pb-3 d-flex justify-content-center">
                        <input type="text" class="form-control search-form border-0" placeholder="股票代碼">
                        <button type="button" class="btn border-0" hidden></button>
                    </div>
                </form>
                <span class="pb-3 d-flex justify-content-center">智能分析，輕鬆投資</span>
            </div>
        </div>
    </div>
</section>
@endsection


