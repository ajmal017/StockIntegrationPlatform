@extends('layouts/nav')
@section('css')
<script
src="https://cdn.polyfill.io/v2/polyfill.js?features=default,String.prototype.repeat,Array.prototype.find,Array.prototype.findIndex,Math.trunc,Math.sign"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@1.19.3"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@0.2.0"></script>
<script src="./js/chartjs-chart-financial.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.1"></script>
<script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@0.7.4"></script>


<style>
    .myChartDiv {
        max-width: 90%;
        max-height: 400px;
    }
    #myChart{
        background-color: #eee;
    }

</style>
@endsection
@section('content')
{{-- <div style="width:1000px">
    <canvas id="chart"></canvas>
</div> --}}
<div class="myChartDiv">
    <canvas id="myChart" width="600" height="400"></canvas>
  </div>


@endsection
@section('js')

    <script>
        var res = {!! json_encode($data) !!};

        var data = [];
        var time = res.time;
        var close = res.close;
        var upBBand = res.upBBand;
        var midBBand = res.midBBand;
        var downBBand = res.downBBand;



        //  time.forEach((element, index) => {
        //     var date = luxon.DateTime.fromRFC2822(element);
        //     data[index] =
        //     {
        //         t: date.valueOf(),
        //     };
        // });

        // open.forEach((element, index) => {
        //     data[index].o = `${element}`;

        // });

		// high.forEach((element, index) => {
        //     data[index].h = `${element}`;
		// });

		// low.forEach((element, index) => {
        //     data[index].l = `${element}`;
        // });


        // close.forEach((element, index) => {
        //     data[index].c = `${element}`;

        // });


        // var ctx = document.getElementById('chart').getContext('2d');
        // ctx.canvas.width = 1000;
        // ctx.canvas.height = 250;
        // var chart = new Chart(ctx, {
        //     type: 'candlestick',
        //     data: {
        //         datasets: [{
        //             label: 'CHRT - Chart.js Corporation',
        //             data: data
        //         }]
        //     },

        // });

        // var ctx = document.getElementById('chart').getContext('2d');
        // ctx.canvas.width = 1000;
        // ctx.canvas.height = 250;
        // var mixedChart = new Chart(ctx, {
        //     type: 'line',
        //     data: {
        //         datasets: [{
        //             label: 'upBBand Dataset',
        //             data: [10, 20, 30, 40],
        //             // this dataset is drawn below
        //             order: 1
        //         }, {
        //             label: 'midBBand Dataset',
        //             data: [10, 10, 10, 10],
        //             type: 'line',
        //             // this dataset is drawn on top
        //             order: 2
        //         }, {
        //             label: 'downBBand Dataset',
        //             data: [10, 10, 10, 10],
        //             type: 'line',
        //             // this dataset is drawn on top
        //             order: 3
        //         }],
        //         labels: ['January', 'February', 'March', 'April']
        //     },
        //     options: options
        // });


        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                        datasets: [{
                            label: 'upBBand Dataset',
                            data: upBBand,
                            // this dataset is drawn below
                            order: 1
                        }, {
                            label: 'midBBand Dataset',
                            data: midBBand,
                            type: 'line',
                            // this dataset is drawn on top
                            order: 2
                        }, {
                            label: 'downBBand Dataset',
                            data: downBBand,
                            type: 'line',
                            // this dataset is drawn on top
                            order: 3
                        }, {
                            label: 'close Dataset',
                            data: close,
                            type: 'line',
                            // this dataset is drawn on top
                            order: 4
                        }],
                        labels: time
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                plugins: {
                    zoom: {
                        // Container for pan options
                        pan: {
                            // Boolean to enable panning
                            enabled: true,

                            // Panning directions. Remove the appropriate direction to disable
                            // Eg. 'y' would only allow panning in the y direction
                            mode: 'xy'
                        },

                        // Container for zoom options
                        zoom: {
                            // Boolean to enable zooming
                            enabled: true,

                            // Zooming directions. Remove the appropriate direction to disable
                            // Eg. 'y' would only allow zooming in the y direction
                            mode: 'xy',
                        }
                    }
                }
            }
        });





    </script>
@endsection
