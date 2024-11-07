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
        Schema::create('Laporan', function (Blueprint $table) {
            $table->id('ID_Laporan');
            $table->foreignId('ID_User')->constrained('User', 'ID_User')->onDelete('cascade');
            $table->enum('Kategori_Laporan', ['Pengumpulan Sampah', 'Tempat Sampah Liar', 'Kondisi TPS', 'Lainnya']);
            $table->longText('Deskripsi_Laporan');
            $table->string('Titik Koordinat');
            $table->string('Foto')->nullable();
            $table->string('Dokumen_Pendukung');
            $table->enum('Status_Laporan', ['Selesai', 'Sedang Diproses', 'Belum Selesai'])->default('Belum Selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Laporan');
    }
};
