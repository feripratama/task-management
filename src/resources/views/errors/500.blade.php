<!DOCTYPE html>
<html>

<head>
    <title>500 error | Clear Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- global level css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="{{asset('css/404.css')}}" rel="stylesheet" type="text/css"/>
    <!-- end of page level styles-->
</head>

<body class="bg-500">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <div class="text-center">
                <div class="error_msg">
                    <img src="{{url('img/pages/500.gif')}}" alt="500 error image">
                </div>
                <hr class="seperator">
                <a href="{{route('taskManagementIndex')}}" class="btn btn-primary link-home">Try Home</a>
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
