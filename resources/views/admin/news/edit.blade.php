@extends('layouts/app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<style>
    .btn-danger {
        position: absolute;
        top: -10px;
        right: -5px;
        border-radius: 15em;
    }

</style>
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/home/news/update/{{$news->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">現在主要圖片</label>
            <img width="300px" src="{{asset('/storage/'.$news->img)}}" alt="">
        </div>
        <div class="form-group">
            <label for="title">重新上傳主要圖片</label>
            <input type="file" class="form-control" id="main-img" name="main-img">
        </div>
        <hr>
        <div class="form-group">
            <label for="imgs">多筆資料</label>
            <input type="file" class="form-control" onchange="upload(this)" id="imgs" name="imgs[]" multiple>
        </div>
        <div id="news_img_content" class="row">
            @foreach ($news->news_img as $item)
            <div class="col-2 news_img" data-news_img_id="{{$item->id}}">
                <div class="news_img_card">
                    <button type="button" class="btn btn-danger" data-news_img_id="{{$item->id}}">X</button>
                    <img class="img-fluid" src="{{asset('/storage/'.$item->img)}}" alt="">
                    <input id="number" class="form-cotrol number" type="number" value="{{$item->sort}}" data-news_img_id="{{$item->id}}" data-news_imgs_id="{{$news->id}}">
                </div>
            </div>
            @endforeach
        </div>
        <hr>
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea type="text" class="form-control" id="content" name="content" value="{{$news->content}}" ></textarea>
        </div>
        <div class="form-group">
            <label for="sort">sort</label>
            <input type="text" class="form-control" id="sort" name="sort" value="{{$news->sort}}" >
        </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>

    $(document).ready(function() {
        $('#content').summernote();
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('.news_img_card .btn-danger').click(function(){
        var news_img_id = $(this).data('news_img_id'); //(this).data()取得的是物件要把鍵值寫進去才會是字串
        console.log('aaa')
        $.ajax({
                type:'POST',
                url:'/home/news/ajax_delete_news_imgs', //網址最前面一定要加'/'不然不會導向url，會變成在原本網址再加上url
                data:{
                    news_img_id: news_img_id,
                    news: 'hahaha',
                },
                success: function(result) {
                    $( `.col-2[data-news_img_id='${news_img_id}']` ).remove()
                },
        })

    });

    $(".number").change(function(){
        var news_imgs_id = $(this).data('news_img_id');
        var img_sort = this.value;

        $.ajax({
                type:'POST',
                url:'/home/news/ajax_sort_news_imgs', //網址最前面一定要加'/'不然不會導向url，會變成在原本網址再加上url
                data:{
                    imgs_id: news_imgs_id,
                    img_sort: img_sort,

                },
                success: function(result) {

                },
        })

   });

</script>
@endsection
