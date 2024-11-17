<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenanggungJawabModel extends Model
{
    protected $table = "Penanggung_Jawab";
    protected $primaryKey = "ID_PJ";
    protected $fillable = [
        "Kode_Laporan",
        "ID_Petugas",
        "Kategori_Laporan",
        "Status_Laporan",
    ];
    public function PengaduanTable()
    {
        return $this->belongsTo(LaporanModel::class, 'Kode_Laporan');
    }
    public function PetugasTable()
    {
        return $this->belongsTo(PetugasModel::class, 'ID_Petugas');
    }
}
