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
        Schema::create('Konten_Edukasi', function (Blueprint $table) {
            $table->id('ID_Edukasi');
            $table->unsignedBigInteger('ID_User')->nullable();
            $table->foreign('ID_User')->references('ID_User')->on('User')->onDelete('set null');
            $table->string('Judul_Edukasi');
            $table->string('Link_URL');
            $table->longText('Deskripsi_Edukasi');
            $table->enum('Jenis_Edukasi', ['Video', 'Artikel']);
            $table->enum('Status_Konten', ['Draf', 'Telah Diunggah'])->default('Draf');
            $table->bigInteger('Jumlah_Komentar')->default(0);
            $table->bigInteger('Jumlah_Like')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Konten_Edukasi');
    }
};