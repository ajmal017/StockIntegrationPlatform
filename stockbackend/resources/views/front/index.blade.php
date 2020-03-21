@extends('layouts/nav')

@section('css')

<link rel="stylesheet" href="{{asset('css/index.css')}}">

@endsection


@section('content')

<!-- container-all -->
<section class="container-all d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="search-box">
                    <h1 class="py-5 d-flex justify-content-center">輕鬆投</h1>
                    <h3 class="pb-3 d-flex justify-content-center">智能投資</h3>
                    <div class="col-12 form-group pb-3 d-flex justify-content-center">
                        <input type="text" class="form-control search-form border-0" placeholder="股票代碼">
                        <button type="button" class="btn border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.005 512.005"
                                style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
                                <g>
                                    <path
                                        d="M505.749,475.587l-145.6-145.6c28.203-34.837,45.184-79.104,45.184-127.317c0-111.744-90.923-202.667-202.667-202.667    S0,90.925,0,202.669s90.923,202.667,202.667,202.667c48.213,0,92.48-16.981,127.317-45.184l145.6,145.6    c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251C514.091,497.411,514.091,483.928,505.749,475.587z     M202.667,362.669c-88.235,0-160-71.765-160-160s71.765-160,160-160s160,71.765,160,160S290.901,362.669,202.667,362.669z" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <span class="pb-3 d-flex justify-content-center">智能分析，輕鬆投資</span>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
