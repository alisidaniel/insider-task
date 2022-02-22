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
        html,
        body {
            background-color: #298a78;
        }

        .title {
            font-size: 50px;
            font-weight: bold;
            color: white;
            line-height: 20px;
        }

        .content {
            margin-top: 100px;
        }

        .form {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="jumbotron content">
            <h1 class="title text-center mt-4">Welocome to Insider League</h1>
            <form class="form" method="post" action="{{ route('index') }}">
                @csrf
                <div class="mb-3">
                    <label for="teams" class="form-label text-white mt-3">Teams</label>
                    <input type="number" class="form-control" name="teams" id="teams" required placeholder="Enter no of teams">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark" type="button">Generate result</button>
                </div>
            </form>
            <div>
            </div>
</body>

</html>