@extends('layouts/nav')
@section('css')
<script
src="https://cdn.polyfill.io/v2/polyfill.js?features=default,String.prototype.repeat,Array.prototype.find,Array.prototype.findIndex,Math.trunc,Math.sign"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@1.19.3"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@0.2.0"></script>
<script src="./js/chartjs-chart-financial.js" type="text/javascript"></script>
@endsection
@section('content')
<div class="container" style="padding-top:100px">
    <h1>股票代號</h1>
    <form method="POST" action="/stock_store" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="stock_id">股票代碼</label>
      <input type="text" class="form-control" id="stock_id" name="stock_id" required>
    </div>


    <div class="form-group">
      <label for="stock_begin_dt">起始時間</label>
      <input type="date" class="form-control" id="stock_begin_dt" name="stock_begin_dt" required>
    </div>

    <div class="form-group">
        <label for="stock_end_dt">終止時間</label>
        <input type="date" class="form-control" id="stock_end_dt" name="stock_end_dt" required>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection

{{-- 
@section('js')
    <script>
         var res = {!! json_encode($data) !!};

         var data = [];
         var open = res.Open;
        var close = res.Close;
        var high = res.High;
		var low = res.Low;
		var time = res.time;

         time.forEach((element, index) => {
            var date = luxon.DateTime.fromRFC2822(element);
            data[index] =
            {
                t: date.valueOf(),
            };
        });

        open.forEach((element, index) => {
            data[index].o = `${element}`;

        });

		high.forEach((element, index) => {
            data[index].h = `${element}`;
		});

		low.forEach((element, index) => {
            data[index].l = `${element}`;
        });


        close.forEach((element, index) => {
            data[index].c = `${element}`;

        });


        var ctx = document.getElementById('chart').getContext('2d');
        ctx.canvas.width = 1000;
        ctx.canvas.height = 250;
        var chart = new Chart(ctx, {
            type: 'candlestick',
            data: {
                datasets: [{
                    label: 'CHRT - Chart.js Corporation',
                    data: data
                }]
            },

        });
    </script>
@endsection --}}
