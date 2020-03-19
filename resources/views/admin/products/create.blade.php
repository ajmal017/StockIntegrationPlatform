@extends('layouts/app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('content')
<div class="container">
    <form method="POST" action="/home/product" enctype="multipart/form-data"> {{--enctype為laravel上傳檔案所需屬性 加就對了!!--}}
        @csrf
        <div class="form-group">
            <label for="img">主要圖片</label>
            <input type="file" class="form-control" id="img" name="img" required>
        </div>
        <div class="form-group">
            <label for="type">產品類型</label>
            <select name="type" class="custom-select" id="inputGroupSelect01">
                @foreach ($all_product as $item)
                <option value="{{$item->id}}" name="type">
                    {{$item->type}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">產品名稱</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">價錢</label>
            <input type="number" min=0 class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="sort">權重</label>
            <input type="number" class="form-control" id="sort" name="sort" required>
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <textarea type="text" class="form-control" id="content" name="content" value=" " required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>


@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote({
            height: 150,
            lang: 'zh-TW',
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                },
                onMediaDelete : function(target) {
                    $.delete(target[0].getAttribute("src"));
                }
            },
        });


        $.upload = function (file) {
            console.log('上船中')
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/home/upload/ajax_upload_img',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function (img) {
                    $('#content').summernote('insertImage', img);
                    console.error('成功');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };

        $.delete = function (file_link) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/home/upload/ajax_delete_img',
                data: {file_link:file_link},
                success: function (img) {
                    console.log("delete:",img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        }
   });

  </script>
@endsection
