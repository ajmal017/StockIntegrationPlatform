<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>輕鬆投</title>
    <link rel="shortcut icon" href="{{asset('img/interview.png')}}" type="image/x-icon">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,200,300,400,500,600,700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent  "
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <div class="navbar-nav btn-L col-6">
                <button type="button" class="btn text-white btn-lg "><img src="{{asset('img/interview.png')}}" alt="">
                    智能投資</button>
                <button type="button" class="btn text-white btn-lg"><img src="{{asset('img/books.svg')}}" alt=""> 證券資訊</button>

            </div>
            <div class=" navbar-nav btn-R col-6 d-flex justify-content-end">
                <button type="button" class="btn text-white btn-lg">登入</button>
                <button type="button" class="btn text-white btn-lg border-light">會員註冊</button>
            </div>

        </div>
    </nav>

    <!-- container-all -->
    <section class="container-all d-flex align-items-center justify-content-center">
        <div class="search-box col-10 col-sm-6 col-lg-4">
            <h1 class="p-3 mb-5 d-flex justify-content-center">輕鬆投</h1>
            <h3 class="p-3 d-flex justify-content-center">智能投資</h3>
            <div class="col-12 form-group p-3 d-flex justify-content-center">
                <input type="text" class="form-control search-form border-0" placeholder="股票代碼">
                <button type="button" class="btn border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        id="Capa_1" x="0px" y="0px" viewBox="0 0 512.005 512.005"
                        style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
                        <g>
                            <path
                                d="M505.749,475.587l-145.6-145.6c28.203-34.837,45.184-79.104,45.184-127.317c0-111.744-90.923-202.667-202.667-202.667    S0,90.925,0,202.669s90.923,202.667,202.667,202.667c48.213,0,92.48-16.981,127.317-45.184l145.6,145.6    c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251C514.091,497.411,514.091,483.928,505.749,475.587z     M202.667,362.669c-88.235,0-160-71.765-160-160s71.765-160,160-160s160,71.765,160,160S290.901,362.669,202.667,362.669z" />
                        </g>
                    </svg>
                </button>
            </div>
            <span class="p-3 d-flex justify-content-center">智能分析，輕鬆投資</span>
        </div>
    </section>







    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>
