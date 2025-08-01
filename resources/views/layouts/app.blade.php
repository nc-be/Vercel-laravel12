<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <meta charset="utf-8">
    <title>TESTING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Agroandes" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body {{-- style="max-width: 2700px; justify-self: center; width: 100%;" --}}>
    {{-- <div class="page-overlay" id="page-overlay__products_filter"></div>
    <div class="page-overlay" id="page-overlay__search"></div> --}}

    <header>

    </header>

    @yield("content")

    <footer id="footer">

    </footer>
</body>
</html>
