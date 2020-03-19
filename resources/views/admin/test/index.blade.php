@extends('layouts/app')

@section('css')
<style>
    .grid {
        position: relative;
    }

    .item {
        /* 外層 */

        position: absolute;
        z-index: 1;
        line-height: 20px;
        border: 1px #000 solid;
    }

    .item-content {
        /* 內容 */
        font-size: 30px;
        text-align: center;
        background: white;
    }

    .item.muuri-item-dragging .item-content {
        /* 拖曳中內容 */
        background: blue;
    }

    .item.muuri-item-releasing .item-content {
        /* 拖曳完成內容 */
        background: red;
    }

    .item.muuri-item-hidden {
        z-index: 0;
    }

    .item.muuri-item-dragging {
        /* 拖曳中 */
        z-index: 3;
    }

    .item.muuri-item-releasing {
        /* 拖曳完成 */
        z-index: 2;
    }

    .boxa {
        width: 300px;
        height: 200px;
        background-color: aquamarine;
    }

    .boxb {
        width: 300px;
        height: 200px;
        background-color: rgb(123, 0, 5);
    }

    .boxc {
        width: 300px;
        height: 200px;
        background-color: rgb(3, 0, 5);
    }
</style>
@endsection

@section('content')
{{--
<div class="grid container">
    <div class="item ">
        <div class="item-content">
            <div class="boxa"></div>
        </div>
    </div>
    <div class="item ">
        <div class="item-content">
            <div class="boxb"></div>
        </div>
    </div>
    <div class="item ">
        <div class="item-content">
            <div class="boxc"></div>
        </div>
    </div>

</div> --}}

<div class="container">
    <a href="/home/news/create" class="btn btn-success">新增項目</a>
    <hr>
    <div class="grid">
        @foreach ($all_news as $item)
        <div class="item ">
            <div class="item-content">
                <table id="example" class="table table-striped table-bordered " style="width:100%">
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
                        <tr>
                            <td><img width="300px" src="{{asset('/storage/'.$item->img)}}" alt=""></td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->content}}</td>
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
                    </tbody>
                </table>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
<!-- hammer.js v2.0.8 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<!-- Muuri v0.5.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/muuri/0.5.3/muuri.min.js"></script>
<script>
    var grid = new Muuri( ".grid", {
  		// 參數設定[註1]
          dragEnabled: true,

      });
      console.log(grid._items);
  	[].slice.call( document.querySelectorAll( ".item"  ) )
  	.forEach(function (elem) {
  		elem.addEventListener( "click", function (e) {
  			e.preventDefault();
  		});
  	});
</script>
@endsection
