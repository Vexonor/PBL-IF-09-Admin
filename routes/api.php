<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/otp', App\Http\Controllers\API\OTPController::class);
Route::apiResource('/petugasKebersihan', App\Http\Controllers\API\PetugasController::class);
Route::apiResource('/admin', App\Http\Controllers\API\AdminController::class);
Route::apiResource('/lokasiTPS', App\Http\Controllers\API\TPSController::class);
Route::apiResource('/pengangkutanTPS', App\Http\Controllers\API\PengangkutanController::class);
Route::apiResource('/informasiPengangkutan', App\Http\Controllers\API\InformasiController::class);
Route::apiResource('/pengaduan', App\Http\Controllers\API\PengaduanController::class);
Route::apiResource('/penanggungJawab', App\Http\Controllers\API\PenanggungJawabController::class);
Route::apiResource('/kontenEdukasi', App\Http\Controllers\API\KontenEdukasiController::class);
Route::apiResource('/bankSampah', App\Http\Controllers\API\BankSampahController::class);
