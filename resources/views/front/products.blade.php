@extends('layouts/nav')
@section('content')
<section class="services1 cid-rSHipPxh3m" id="services1-5">
    <!---->

    <!---->
    <!--Overlay-->

    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left pb-3 mbr-fonts-style display-1">
                    Our Shop
                </h2>
                <hr>
                <div class="row flex-wrap">
                    <div class="mbr-section-btn align-left">
                        <a class="btn btn-warning-outline display-4 typeBtn" onclick="btnOnClick({{$product}},'all')">
                            all
                        </a>
                    </div>
                    @foreach ($productType as $item)
                    <div class="mbr-section-btn align-left">
                        <a class="btn btn-warning-outline display-4 typeBtn" onclick="btnOnClick({{$product}},{{$item->id}})">
                            {{$item->type}}
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>

            <div class="row flex-wrap product_content">
                <div  class="card col-12 col-md-6 p-3 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="assets/images/product1.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-5">
                                Watch Star
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium dolores
                                doloribus
                                eligendi eum illo placeat quis repellendus sequi tempore!
                            </p>
                            <!--Btn-->
                            <div class="mbr-section-btn align-left">
                                <a href="https://mobirise.co" class="btn btn-warning-outline display-4">
                                    $ 790
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('js')
<script>
    // var data=$('.product_content').data('product');


    function btnOnClick(data,id) {

        console.log(id)

        var content = document.querySelector('.product_content');

        $('.product_content .card').remove();


        data.forEach(element => {

            if(id == 'all'){
                Template(element);
            }
            else if(element.type == id){

                Template(element);
            }
        });

        function Template(element) {
            // += 非常重要!!!!!!!!!!!
            content.innerHTML +=`<div id="${element.id}" class="card col-12 col-md-6 p-3 col-lg-4">
                                <div class="card-wrapper">
                                    <div class="card-img">
                                        <img src="${element.img}" alt="Mobirise">
                                    </div>
                                    <div class="card-box">
                                        <h4 class="card-title mbr-fonts-style display-5">
                                            ${element.name}
                                        </h4>
                                        <p class="mbr-text mbr-fonts-style display-7">
                                            ${element.content}
                                        </p>
                                        <!--Btn-->
                                        <div class="mbr-section-btn align-left">
                                            <a href="/products/${element.id}" class="btn btn-warning-outline display-4">
                                                ${element.price}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>`
        }








    };




</script>
@endsection
