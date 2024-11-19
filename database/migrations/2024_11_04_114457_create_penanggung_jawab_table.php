<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Penanggung_Jawab', function (Blueprint $table) {
            $table->id('ID_PJ');
            $table->char('Kode_Laporan');
            $table->foreign('Kode_Laporan')->references('Kode_Laporan')->on('Pengaduan')->onDelete('cascade');
            $table->char('ID_Petugas');
            $table->foreign('ID_Petugas')->references('ID_Petugas')->on('Petugas_Kebersihan')->onDelete('cascade');
            $table->enum('Kategori_Laporan', ['Pengumpulan Sampah', 'Tempat Sampah Liar', 'Kondisi TPS', 'Lainnya']);
            $table->enum('Status_Laporan', ['Selesai', 'Sedang Diproses', 'Belum Selesai'])->default('Sedang Diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Penanggung_Jawab');
    }
};