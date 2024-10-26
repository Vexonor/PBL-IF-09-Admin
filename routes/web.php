<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/laporan', function () {
    return view('laporan', [
        'title' => 'Laporan'
    ]);
});

Route::get('/informasiPengangkutan', function () {
    return view('informasiPengangkutan', [
        'title' => 'Informasi Pengangkutan'
    ]);
});

Route::get('/lokasiTPS', function () {
    return view('lokasiTPS', [
        'title' => 'Lokasi TPS'
    ]);
});

Route::get('/bankSampah', function () {
    return view('bankSampah', [
        'title' => 'Bank Sampah'
    ]);
});

Route::get('/admin', function () {
    return view('admin', [
        'title' => 'Admin'
    ]);
});

Route::get('/petugasKebersihan', function () {
    return view('petugasKebersihan', [
        'title' => 'Petugas Kebersihan'
    ]);
});

Route::get('/pengaturan', function () {
    return view('pengaturan', [
        'title' => 'Pengaturan'
    ]);
});
