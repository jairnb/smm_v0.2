
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMM-Somada Music Market</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body onload="ajuste()">
        @include('parts/nav')

        @include('parts/header')
        
        @section('content-smm')
            @show


        @include('parts/footer')
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        @yield('javascript')
    </body>
</html>
