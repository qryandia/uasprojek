<html>
    <head>
        <title>@yield ('title')</title>
        <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                background-color: #F4F4F4;
            }

            .gak-garis {
                text-decoration: none;
                color: #7BC6FA;
            }

            .circle {
                width: 30px;
                height: 30px;
                background-color: gray;
                border-radius: 50%;
                text-align: center;
                line-height: 30px;
                color: white;
            }

            .circle.active {
                background-color: #0B3D91;
            }

            .text.active {
                color: #0B3D91;
            }

            .step-name {
                font-size: 14px;
            }
        </style>
        
    </head>
    <body>
        @include('layouts.navbar_admin')
        @yield('isi')
        <script>
        AOS.init();
        </script>

    </body>
    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#tabel-pendaftar').DataTable();
         });
    </script>
    <!-- akhir javascript -->
</html>