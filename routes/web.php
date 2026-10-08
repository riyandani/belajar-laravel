<?php

use Illuminate\Support\Facades\Route;

// Membuka halaman1.blade.php
Route::get('/halaman1', function () {
    return view('halaman1');
});

// Membuka halaman2.blade.php
Route::get('/halaman2', function () {
    return view('halaman2');
});

// Membuka halaman3.blade.php
Route::get('/halaman3', function () {
    return view('halaman3');
});

// Membuka halaman4.blade.php
Route::get('/halaman4', function () {
    return view('halaman4');
});

// Membuka halaman5.blade.php
Route::get('/halaman5', function () {
    return view('halaman5');
});

// Membuka halaman coba.blade.php
Route::get('/coba', function () {
    return view('coba');
});

// Membuka halaman10.blade.php
Route::get('/halaman10', function () {
    return view('halaman10');
});

// Membuka halaman11.blade.php
Route::get('/halaman11', function () {
    return view('halaman11');
});

// Membuka halaman12.blade.php
Route::get('/halaman12', function () {
    return view('halaman12');
});

// URL /halaman20 → halaman20.blade.php
Route::get('/halaman20', function () {
    return view('halaman20');
});

// URL /halaman21 → halaman21.blade.php
Route::get('/halaman21', function () {
    return view('halaman21');
});

// URL /halaman22 → halaman22.blade.php
Route::get('/halaman22', function () {
    return view('halaman22');
});

// URL /halaman23 → halaman23.blade.php
Route::get('/halaman23', function () {
    return view('halaman23');
});

// URL /halaman24 → halaman24.blade.php
Route::get('/halaman24', function () {
    return view('halaman24');
});

// URL /halaman25 → halaman25.blade.php
Route::get('/halaman25', function () {
    return view('halaman25');
});


// DASHBOARD
// URL "/" adalah halaman utama.
// Laravel akan menampilkan dashboard.blade.php
Route::get('/', function () {
    return view('dashboard');
});