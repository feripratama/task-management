{{-- <!DOCTYPE html>
<html>

<head>
    <title>404 error| Clear Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- global level css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="{{asset('css/404.css')}}" rel="stylesheet">
    <!-- end of page level styles-->
    <style>

    </style>
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{asset('img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <div class="text-center">
                <div>
                    <div class="error_img">
                        <img src="{{asset('img/pages/404.gif')}}" alt="404 error image">
                    </div>
                    <hr class="seperator">
                    
                    <a href="{{ route('index') }}" class="btn btn-primary link-home">Go Back</a> 
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<script type="text/javascript">
    //=================Preloader===========//
    $(window).on('load', function () {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut();
    });
    //=================end of Preloader===========//
</script>
</body>

</html>

--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}"/>
    <!-- global level css -->
    {{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <!-- end of global css-->
    <!-- page level styles-->
    {{-- <link href="{{asset('css/404.css')}}" rel="stylesheet"> --}}
    <style>
    @import url(https://fonts.googleapis.com/css?family=Gilda+Display);

    html {
        /*background: radial-gradient(#000, #111);*/
        background-color: #01579B;
        color: white;
        overflow: hidden;
        height: 100%;
        user-select: none;
    }

    .static {
        width: 100%;
        height: 100%;
        position: relative;
        margin: 0;
        padding: 0;
        top: -100px;
        opacity: 0.05;
        z-index: 230;
        user-select: none;
        user-drag: none;
    }

    .error {
        text-align: center;
        font-family: 'Gilda Display', serif;
        font-size: 95px;
        font-style: italic;
        text-align: center;
        width: 100px;
        height: 60px;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: -60px;
        right: 0;
        animation: noise 2s linear infinite;
        overflow: default;
    }

    .error:after {
        content: '404';
        font-family: 'Gilda Display', serif;
        font-size: 100px;
        font-style: italic;
        text-align: center;
        width: 150px;
        height: 60px;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        color: blue;
        animation: noise-1 .2s linear infinite;
    }

    .info {
        text-align: center;
        font-family: 'Gilda Display', serif;
        font-size: 15px;
        font-style: italic;
        text-align: center;
        width: 200px;
        height: 60px;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 140px;
        bottom: 0;
        left: 0;
        right: 0;
        animation: noise-3 1s linear infinite;
    }

    .info a {    
        color: white;
    }

    .error:before {
        content: '404';
        font-family: 'Gilda Display', serif;
        font-size: 100px;
        font-style: italic;
        text-align: center;
        width: 100px;
        height: 60px;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        color: red;
        animation: noise-2 .2s linear infinite;
    }

    @keyframes noise-1 {
        0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
        10% {opacity: .1;}
        50% {opacity: .5; left: -6px;}
        80% {opacity: .3;}
        100% {opacity: .6; left: 2px;}
    }

    @keyframes noise-2 {
        0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
        10% {opacity: .1;}
        50% {opacity: .5; left: 6px;}
        80% {opacity: .3;}
        100% {opacity: .6; left: -2px;}
    }

    @keyframes noise {
        0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; transform: scaleY(1);}  
        4.3% {opacity: 1; transform: scaleY(1.7);}
        43% {opacity: 1; transform: scaleX(1.5);}
    }

    @keyframes noise-3 {
        0%,3%,5%,42%,44%,100% {opacity: 1; transform: scaleY(1);}
        4.3% {opacity: 1; transform: scaleY(4);}
        43% {opacity: 1; transform: scaleX(10) rotate(60deg);}
    }
</style>
</head>
<body>

    <div class="error">404</div>
    <br /><br />
    <span class="info">Not found 
        <br>
        <a href="{{ route('taskManagementIndex') }}"><< Back</a>
    </span>    

    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <script>


    </script>
</body>
</html>