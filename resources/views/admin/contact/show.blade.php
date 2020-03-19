@extends('layouts/app')


@section('content')
<div class="container">
    <form>
        @csrf
        <div class="form-group row border border-dark rounded">
            <label for="name" class="col-sm-2 col-form-label">客戶姓名</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="name" value="{{$contact->name}}">
            </div>
            <label for="staticEmail" class="col-sm-2 col-form-label">客戶信箱</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$contact->email}}">
            </div>
            <label for="phone" class="col-sm-2 col-form-label">客戶電話</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="phone" value="{{$contact->phone}}">
            </div>
            <label for="content" class="col-sm-2 col-form-label">內容</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="content" value="{{$contact->content}}">
            </div>
        </div>
    </form>
</div>
@endsection
