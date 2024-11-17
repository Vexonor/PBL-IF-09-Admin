<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoModel extends Model
{
    protected $table = "Foto_Pengaduan";
    protected $primaryKey = "ID_Foto";
    protected $fillable = [
        "ID_Laporan",
        "Foto",
    ];

    public function LaporanTable()
    {
        return $this->belongsTo(LaporanModel::class, 'ID_Laporan');
    }
}
