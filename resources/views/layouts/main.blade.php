<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insider League</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <style>
            html, body {
                background-color: #298a78;
            }
            .content{
                margin-top: 100px;
            }
            .card {
                background-color: white;
            }
        </style>
    </head>
    <body>
     @yield('content')
    </body>
</html>
