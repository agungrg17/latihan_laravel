@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1> Portal Informasi Siswa </h1>
        <p> Selamat Datang di Portal Informasi Siswa SMA 404 </p>
        <a href="{{ url('/info-kegiatan') }}" class="btn btn-dark">Info Kegiatan</a>
        @can('isAdmin')
        <a href="{{ url('/siswa') }}" class="btn btn-primary">Data Siswa</a>
        @endcan
    </div>
@endsection