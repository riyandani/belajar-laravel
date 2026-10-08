@extends('master')

@section('title', 'Halaman 20')

@section('content')

    <!-- Judul halaman -->
    <h1>Ini Halaman 20</h1>

    <!-- Isi halaman -->
    <p>Ini adalah isi dari halaman 20.</p>

    <!--
        Tombol Back.
        Ketika diklik akan kembali ke Dashboard.
    -->
    <a href="{{ url('/') }}" class="btn btn-primary">
        Back to Dashboard
    </a>

@endsection