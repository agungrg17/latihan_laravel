<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>LATIHAN_LARAVEL_TEMPLATE</title>
</head>
<body>
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{ url('/beranda') }}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/data-siswa') }}">Data Siswa</a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/info-kegiatan') }}">Info Kegiatan</a>
            </li>
        </ul>
    </nav>
    @yield('content')

    <footer class="fixed-bottom bg-primary">
        <div class="text-center">
            (c) 2021 Copyright : SMA 404
        </div>
    </footer>
        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
</body>
</html>