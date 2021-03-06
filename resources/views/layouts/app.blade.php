<!DOCTYPE html>
<html lang="en">
<head>
    <title>留言板</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.css')}}">
    <script src="{{asset('static/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('static/js/popper.min.js')}}"></script>
    <script src="{{asset('static/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('static/simditor/styles/simditor.css')}}" />

    <!-- <script type="text/javascript" src="simditor/scripts/jquery.min.js"></script> -->
    <script type="text/javascript" src="{{asset('static/simditor/scripts/module.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/simditor/scripts/hotkeys.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/simditor/scripts/uploader.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/simditor/scripts/simditor.js')}}"></script>
</head>
<body>
    @yield('content')
</body>

</html>
    