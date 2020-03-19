@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <h1>產品類別管理</h1>
    <hr>
    <a href="/home/productTypes/create" class="btn btn-success">新增項目</a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>產品類別</th>
                <th>副標題</th>
                <th>權重</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_product as $item)
                <tr>
                    <td>{{$item->type}}</td>
                    <td>{{$item->subtitle}}</td>
                    <td>{{$item->sort}}</td>
                    <td width='100'>
                        <a href="/home/productTypes/{{$item->id}}/edit" class="btn btn-success btn-sm">編輯</a>
                        <button href="/home/productTypes/delete" onclick='show_confirm({{$item->id}})' class="btn btn-danger btn-sm">移除</button>
                        <form id="delete-{{$item->id}}" action="/home/productTypes/{{$item->id}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
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
            $('#example').dataTable( {
            "order": [[ 2, 'desc' ]]
        } );
        } );

        function show_confirm(id)
        {

            var r=confirm("Press a button")
            if (r==true)
                {
                    alert("You pressed OK!");
                    document.getElementById('delete-'+id).submit();
                }
        }
    </script>
@endsection
