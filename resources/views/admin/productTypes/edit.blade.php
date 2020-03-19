@extends('layouts/app')

@section('content')
<div class="container">
    <form method="POST" action="/home/productTypes/{{$products->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type">產品類別</label>
            <input type="text" class="form-control" id="type" name="type" required value="{{$products->type}}">
        </div>
        <div class="form-group">
            <label for="subtitle">副標題</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" required value="{{$products->subtitle}}">
        </div>
        <div class="form-group">
            <label for="sort">權重</label>
            <input type="number" class="form-control" id="sort" name="sort" value="{{$products->sort}}">
        </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>

@endsection
