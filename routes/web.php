<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\bankSampah;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\login;
use App\Http\Controllers\petugasKebersihan;
use App\Http\Controllers\informasiPengangkutan;
use App\Http\Controllers\lokasiTPS;
use Illuminate\Support\Facades\Route;

Route::get('/', [login::class, 'login'])->name('login.page');
Route::post('/', [login::class, 'loginProcess'])->name('login.process');
Route::post('/logout', [login::class, 'logout'])->name('logout');

Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard.page');

Route::get('/laporan', function () {
    return view('laporan', [
        'title' => 'Laporan'
    ]);
});

// Informasi Pengangkutan
Route::get('/informasiPengangkutan', [informasiPengangkutan::class, 'informasiPengangkutan'])->name('informasi.page');
Route::post('/informasiPengangkutan', [informasiPengangkutan::class, 'storeInformasi'])->name('informasi.store');
Route::patch('/informasiPengangkutan/{ID_Informasi}', [informasiPengangkutan::class, 'updateInformasi'])->name('informasi.update');
Route::delete('/informasiPengangkutan/{ID_Informasi}', [informasiPengangkutan::class, 'destroyInformasi'])->name('informasi.destroy');

Route::get('/kontenEdukasi', function () {
    return view('kontenEdukasi', [
        'title' => 'Konten Edukasi'
    ]);
});

// Lokasi TPS
Route::get('/lokasiTPS', [lokasiTPS::class, 'lokasiTPS'])->name('tps.page');
Route::post('/lokasiTPS', [lokasiTPS::class, 'storeTPS'])->name('tps.store');
Route::patch('/lokasiTPS/{ID_TPS}', [lokasiTPS::class, 'updateTPS'])->name('tps.update');
Route::delete('/lokasiTPS/{ID_TPS}', [lokasiTPS::class, 'destroyTPS'])->name('tps.destroy');

// Pengangkutan TPS
Route::post('/pengangkutanTPS', [lokasiTPS::class, 'storePengangkutan'])->name('pengangkutan.store');
Route::patch('/pengangkutanTPS/{ID_Pengangkutan}', [lokasiTPS::class, 'updatePengangkutan'])->name('pengangkutan.update');
Route::delete('/pengangkutanTPS/{ID_Pengangkutan}', [lokasiTPS::class, 'destroyPengangkutan'])->name('pengangkutan.destroy');

// Bank Sampah
Route::get('/bankSampah', [bankSampah::class, 'bankSampah']);
Route::post('/bankSampah', [bankSampah::class, 'storeBankSampah'])->name('BankSampah.store');

// Admin
Route::get('/admin', [admin::class, 'admin'])->name('admin.page');
Route::post('/admin', [admin::class, 'storeAdmin'])->name('admin.store');
Route::patch('/admin/{ID_User}', [admin::class, 'updateAdmin'])->name('admin.update');
Route::delete('/admin/{ID_User}', [admin::class, 'destroyAdmin'])->name('admin.destroy');

// Petugas Kebersihan
Route::get('/petugasKebersihan', [petugasKebersihan::class, 'petugasKebersihan'])->name('petugas.page');
Route::post('/petugasKebersihan', [petugasKebersihan::class, 'storePetugas'])->name('petugas.store');
Route::patch('/petugasKebersihan/{ID_User}', [petugasKebersihan::class, 'updatePetugas'])->name('petugas.update');
Route::delete('/petugasKebersihan/{ID_User}', [petugasKebersihan::class, 'destroyPetugas'])->name('petugas.destroy');

Route::get('/pengaturan', function () {
    return view('pengaturan', [
        'title' => 'Pengaturan'
    ]);
});
