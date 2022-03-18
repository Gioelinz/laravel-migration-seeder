<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-info">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Transilien-train.svg/1200px-Transilien-train.svg.png"
                        alt="" width="60" height="60">
                    Trains
                </a>
            </div>
        </nav>
    </header>

    @yield('content')
</body>

</html>
