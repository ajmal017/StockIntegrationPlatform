@extends('layouts/app')

@section('content')
<div class="container">
    <form method="POST" action="/home/productTypes" enctype="multipart/form-data"> {{--enctype為laravel上傳檔案所需屬性 加就對了!!--}}
        @csrf
        <div class="form-group">
            <label for="type">產品類別</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="form-group">
            <label for="subtitle">副標題</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" required>
        </div>
        <div class="form-group">
            <label for="sort">權重</label>
            <input type="number" class="form-control" id="sort" name="sort" >
        </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>

@endsection
