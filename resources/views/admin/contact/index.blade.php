@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <h1>信箱</h1>
    <hr>
    <a href="/home/product/create" class="btn btn-success">新增項目</a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>客戶名稱</th>
                <th>客戶信箱</th>
                <th>連絡電話</th>
                <th>內文</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->content}}</td>
                <td width='100'>
                    <form action="/home/contact/{{$item->id}}" method="GET" >
                        <button class="btn btn-success btn-sm">
                            查看
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').dataTable();
    } );


</script>
@endsection
