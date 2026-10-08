@extends('master')

@section('title', 'Halaman 25')

@section('content')

    <!-- Judul halaman -->
    <h1>Ini Halaman 25</h1>

    <!-- Isi halaman -->
    <p>Ini adalah isi dari halaman 25.</p>

    <!--
        Tombol Back.
        Ketika diklik akan kembali ke Dashboard.
    -->
    <a href="{{ url('/') }}" class="btn btn-primary">
        Back to Dashboard
    </a>

@endsection