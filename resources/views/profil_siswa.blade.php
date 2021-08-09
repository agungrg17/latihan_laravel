<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>LATIHAN_LARAVEL_SISWA</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Profil Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('siswa.index') }}">Kembali</a>
                    <div class="row ml-2">
                        <h4 class="col-4">Nama<h4>
                        <h4>: {{$siswa->nama}} </h4>
                    </div>
                    <div class="row ml-2">
                        <h4 class="col-4">NIS<h4>
                        <h4>: {{$siswa->nis}} </h4>
                    </div>
                    <div class="row ml-2">
                        <h4 class="col-4">Tanggal Lahir<h4>
                        <h4>: {{$siswa->tgl_lahir}} </h4>
                    </div>
            </div>      
        </div>
    </div>
@endsection
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
</body>
</html>