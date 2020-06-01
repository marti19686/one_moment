<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One Moment - Marcin Michalak</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Rambla&family=Staatliches&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="row m-0">
        @include('portfolio.header')
        @include('portfolio.main')
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
