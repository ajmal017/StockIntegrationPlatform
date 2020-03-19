@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <a href="/home/news/create" class="btn btn-success">新增項目</a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>img</th>
                <th>title</th>
                <th>content</th>
                <th>sort</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_news as $item)
            <tr>
                <td><img width="300px" src="{{asset('/storage/'.$item->img)}}" alt=""></td>
                <td>{{$item->title}}</td>
                <td>{!!$item->content!!}</td>
                <td>{{$item->sort}}</td>
                <td width='100'>
                    <a href="/home/news/edit/{{$item->id}}" class="btn btn-success btn-sm">編輯</a>
                    <button href="/home/news/delete" onclick='show_confirm({{$item->id}})'
                        class="btn btn-danger btn-sm">移除</button>
                    <form id="delete-{{$item->id}}" action="/home/news/delete/{{$item->id}}" method="POST"
                        style="display: none;">
                        @csrf
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
    $('#example').dataTable( {
        "order": [[ 0, 'desc' ]]
    } );

        function show_confirm(id)
        {

            var r=confirm("確定刪除?")
            if (r==true)
                {
                    alert("確認!");
                    document.getElementById('delete-'+id).submit();
                }
        }
</script>
@endsection
