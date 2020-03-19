@extends('layouts/nav')

@section('css')
<style>
    .color {
        padding: 10px 20px;
        width: 160px;
        min-height: 58px;
        height: 100%;
        font-size: 16px;
        line-height: 20px;
        color: #757575;
        text-align: center;
        border: 1px solid #eee;
        background-color: #fff;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: opacity, border .2s linear;
    }

    .color.is-active {
        border: 1px solid black;
    }
</style>
@endsection

@section('content')
<section class="features3 cid-rRF3umTBWU " id="features3-7">
    <div class="container ">
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{$product->img}}" alt="">
            </div>
            <div class="col-6">
                <div class="product_information">
                    <h2>{{$product->name}}</h2>
                    <span>4GB+128GB, 勝於藍</span>
                    <span>NT${{$product->price}}</span>
                </div>
                <hr>
                <div class="product_info">
                    <span>該商品可享受雙倍積分</span>
                </div>
                <hr>
                <form action="/product/cart_add" method="POST">
                    @csrf
                    <div>
                        <span>容量</span>
                        <div class="row">
                            <div class="col-4 ">4GB+128GB</div>
                            <input type="text" value="" hidden>
                        </div>
                    </div>
                    <div>
                        <span>顏色</span>
                        <div class="row">
                            <div class="col-4 color">白色</div>
                            <div class="col-4 color">紅色</div>
                            <div class="col-4 color">青色</div>
                            <div class="col-4 color">綠色</div>
                            <input type="text" value="" hidden>
                        </div>
                    </div>
                    <div>
                        <span>數量</span>
                        <div class="row">
                            <div id="input_div">
                                <span  id="moins" onclick="minus()">-</span>
                                <input type="text" size="25" value="1" id="count" name="count">
                                <span  id="plus" onclick="plus()">+</span>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="id" value="{{$product->id}}" hidden>
                    <input type="text" name="name" value="{{$product->name}}" hidden>
                    <input type="text" name="price" value="{{$product->price}}" hidden>
                    <button>立即購買</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $('.row .color').click(function(){
        console.log('aaaa');

        $('.row .color').removeClass('is-active');
        $(this).addClass('is-active');
    })


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var count = 0;
    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
      }
    }


</script>
@endsection
