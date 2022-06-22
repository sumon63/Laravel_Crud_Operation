<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
    <style>
        svg.w-5.h-5 {
        display: none;
    }
    </style>
</head>
<body>
    @yield('content')

    <script src="{{asset('asset/js/bootstrap.js')}}"></script>
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
</body>
</html>
