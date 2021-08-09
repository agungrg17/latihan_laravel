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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('siswa.create') }}">Tambah Data Siswa</a>
                <table class=" table table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Tanggal Lahir</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($siswa as $s)
                    <tr>
                        <td> {{ $s->nama }} </td>
                        <td> {{ $s->nis }} </td>
                        <td> {{ $s->tgl_lahir }} </td>
                        <td>
                            <ul class="nav">
                                <a href="{{ route ('siswa.show', $s->id) }}" class="btn btn-success mr-2">Show</a>
                                <a href="{{ route ('siswa.edit', $s->id) }}" class="btn btn-primary mr-2">Edit</a>
                                <form action="{{ route ('siswa.destroy', $s->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>      
        </div>
    </div>
@endsection
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
</body>
</html>