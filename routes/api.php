<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\Mobile\AutentikasiMobileController;
use App\Http\Controllers\Mobile\BankSampahMobileController;
use App\Http\Controllers\Mobile\BerandaMobileController;
use App\Http\Controllers\Mobile\InformasiPengangkutanMobileController;
use App\Http\Controllers\Mobile\LokasiTpsMobileController;
use App\Http\Controllers\Mobile\PengaduanMobileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/admin', [admin::class, 'storeAdmin'])->name('admin.store');

//Mobile
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Auth
Route::post('/masuk', [AutentikasiMobileController::class, 'masuk']);
Route::post('/daftar', [AutentikasiMobileController::class, 'daftar']);
Route::post('/pembuka', [AutentikasiMobileController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {

    // Pengaduan
    Route::get('/pengaduan', [PengaduanMobileController::class, 'index']);
    Route::post('/pengaduan', [PengaduanMobileController::class, 'store']);
    Route::get('/pengaduan/{id}', [PengaduanMobileController::class, 'show']);
    Route::post('/pengaduan/{id}', [PengaduanMobileController::class, 'update']);
    Route::delete('/pengaduan/{id}', [PengaduanMobileController::class, 'destroy']);

    // Informasi pengangkutan
    Route::get('/informasi_pengangkutan', [InformasiPengangkutanMobileController::class, 'index']);

    // Lokasi TPS
    Route::get('/lokasi_tps/{kecamatan}', [LokasiTpsMobileController::class, 'show']);

    // Bank Sampah
    Route::get('/bank_sampah/{jenisSampah}', [BankSampahMobileController::class, 'show']);
});