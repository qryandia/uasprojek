<html>
    <head>
        <title>@yield ('title')</title>
        <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <style>
            @font-face {
                font-family: 'Raleway';
                src: url('{{ asset('font/raleway.woff2') }}') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            body {
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body>
        @include('layouts.navbar')
        @yield('isi')
        <script>
        AOS.init();
        </script>

    </body>
</html>