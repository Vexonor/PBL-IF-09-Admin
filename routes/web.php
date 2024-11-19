<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\bankSampah;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\login;
use App\Http\Controllers\petugasKebersihan;
use App\Http\Controllers\informasiPengangkutan;
use App\Http\Controllers\kontenController;
use App\Http\Controllers\laporan;
use App\Http\Controllers\lokasiTPS;
use App\Http\Controllers\pengaturan;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/', [login::class, 'login'])->name('login');
Route::post('/', [login::class, 'loginProcess'])->name('login.process');
Route::post('/logout', [login::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.page');

    // Laporan
    Route::prefix('laporan')->group(function () {
        Route::get('/', [laporan::class, 'laporan'])->name('laporan.page');
        Route::patch('/{ID_Laporan}', [laporan::class, 'updateLaporan'])->name('laporan.update');
        Route::delete('/{ID_Laporan}', [laporan::class, 'destroyLaporan'])->name('laporan.destroy');
        Route::get('/get-kategori/{Kode_Laporan}', [laporan::class, 'getKategori'])->name('laporan.getKategori');

        Route::prefix('penanggungJawab')->group(function () {
            Route::post('/', [laporan::class, 'storePenanggungJawab'])->name('penanggungJawab.store');
            Route::patch('/{ID_PJ}', [laporan::class, 'updatePenanggungJawab'])->name('penanggungJawab.update');
            Route::delete('/{ID_PJ}', [laporan::class, 'destroyPenanggungJawab'])->name('penanggungJawab.destroy');
        });
    });

    // Informasi Pengangkutan
    Route::prefix('informasiPengangkutan')->group(function () {
        Route::get('/', [informasiPengangkutan::class, 'informasiPengangkutan'])->name('informasi.page');
        Route::post('/', [informasiPengangkutan::class, 'storeInformasi'])->name('informasi.store');
        Route::patch('/{ID_Informasi}', [informasiPengangkutan::class, 'updateInformasi'])->name('informasi.update');
        Route::delete('/{ID_Informasi}', [informasiPengangkutan::class, 'destroyInformasi'])->name('informasi.destroy');
    });

    // Lokasi TPS dan Pengangkutan TPS
    Route::prefix('lokasiTPS')->group(function () {
        Route::get('/', [lokasiTPS::class, 'lokasiTPS'])->name('tps.page');
        Route::post('/', [lokasiTPS::class, 'storeTPS'])->name('tps.store');
        Route::patch('/{ID_TPS}', [lokasiTPS::class, 'updateTPS'])->name('tps.update');
        Route::delete('/{ID_TPS}', [lokasiTPS::class, 'destroyTPS'])->name('tps.destroy');

        Route::prefix('pengangkutan')->group(function () {
            Route::post('/', [lokasiTPS::class, 'storePengangkutan'])->name('pengangkutan.store');
            Route::patch('/{ID_Pengangkutan}', [lokasiTPS::class, 'updatePengangkutan'])->name('pengangkutan.update');
            Route::delete('/{ID_Pengangkutan}', [lokasiTPS::class, 'destroyPengangkutan'])->name('pengangkutan.destroy');
        });
    });

    // Bank Sampah
    Route::prefix('bankSampah')->group(function () {
        Route::get('/', [bankSampah::class, 'bankSampah'])->name('BankSampah.page');
        Route::post('/', [bankSampah::class, 'storeBankSampah'])->name('BankSampah.store');
    });

    // Admin
    Route::prefix('admin')->group(function () {
        Route::get('/', [admin::class, 'admin'])->name('admin.page');
        Route::post('/', [admin::class, 'storeAdmin'])->name('admin.store');
        Route::patch('/{ID_User}', [admin::class, 'updateAdmin'])->name('admin.update');
        Route::delete('/{ID_User}', [admin::class, 'destroyAdmin'])->name('admin.destroy');
    });

    // Petugas Kebersihan
    Route::prefix('petugasKebersihan')->group(function () {
        Route::get('/', [petugasKebersihan::class, 'petugasKebersihan'])->name('petugas.page');
        Route::post('/', [petugasKebersihan::class, 'storePetugas'])->name('petugas.store');
        Route::patch('/{ID_User}', [petugasKebersihan::class, 'updatePetugas'])->name('petugas.update');
        Route::delete('/{ID_User}', [petugasKebersihan::class, 'destroyPetugas'])->name('petugas.destroy');
    });

    // Pengaturan
    Route::prefix('pengaturan')->group(function () {
        Route::get('/', [pengaturan::class, 'pengaturan'])->name('pengaturan.page');
        Route::patch('/{ID_User}', [pengaturan::class, 'updateProfile'])->name('pengaturan.update');
        Route::put('/{ID_User}', [pengaturan::class, 'changePassword'])->name('change.password');
    });

    // Konten Edukasi
    Route::prefix('kontenEdukasi')->group(function () {
        Route::get('/', [kontenController::class, 'KontenController'])->name('konten.page');
        Route::post('/', [kontenController::class, 'storeKonten'])->name('konten.store');
        Route::put('/{ID_Edukasi}', [kontenController::class, 'uploadKonten'])->name('konten.upload');
        Route::patch('/{ID_Edukasi}', [kontenController::class, 'updateKonten'])->name('konten.update');
        Route::delete('/{ID_Edukasi}', [kontenController::class, 'destroyKonten'])->name('konten.destroy');
    });
});