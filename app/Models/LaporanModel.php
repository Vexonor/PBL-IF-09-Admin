<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanModel extends Model
{
    protected $table = "Pengaduan";
    protected $primaryKey = "ID_Laporan";
    protected $fillable = [
        "Kode_Laporan",
        "ID_User",
        "Kategori_Laporan",
        "Deskripsi_Laporan",
        "Titik_Koordinat",
        "Foto",
        "Dokumen_Pendukung",
        "Status_Laporan"
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestId = static::max('ID_Laporan');
            $nextId = $latestId + 1;
            $model->Kode_Laporan = 'LP-' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
        });
    }
    public function UserTable()
    {
        return $this->belongsTo(User::class, 'ID_User');
    }
    public function FotoTable()
    {
        return $this->hasMany(FotoModel::class, 'ID_Laporan');
    }
    public function PenanggungJawabTable()
    {
        return $this->belongsTo(PenanggungJawabModel::class, 'Kode_Laporan');
    }
}
