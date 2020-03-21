<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>輕鬆投</title>
    <link rel="shortcut icon" href="{{asset('img/interview.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,200,300,400,500,600,700&display=swap" rel="stylesheet">

    @yield('css')

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark p-0">

        <div class="toggle">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent  "
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav btn-L col-lg-6">
                <button type="button" class="btn text-white btn-lg p-0"><img src="./img/interview.png" alt="">
                    &emsp;輕鬆投
                </button>

                {{-- 暫時連結 --}}
                &emsp; <a href="/basic_info">basic_info</a> &emsp; <a href="/news">news</a> &emsp; <a href="/history">history</a>

            </div>
            <div class=" navbar-nav btn-R col-lg-6 d-flex justify-content-end">
                <button type="button" class="btn text-white btn-lg p-0">登入</button>
                &emsp;&emsp;
                <button type="button" class="btn text-white btn-lg border-light p-0">會員註冊</button>
            </div>

        </div>


    </nav>


    @yield('content')







    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    @yield('js')

</body>

</html>
