@extends('layouts/nav')

@section('content')
    <section class="features3 cid-rRF3umTBWU " id="features3-7">
        <div class="container ">
            <div class="media-container-row">
                {{-- {{$news}} --}}
                {{-- @foreach ($news->news_img as $item)

                {{$item->id}}
                @endforeach --}}
                @foreach ($news as $item)

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img class="img-fluid" src="{{asset('/storage/'.$item->img)}}" alt="Mobirise">
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>


@endsection

