<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiModel extends Model
{
    use HasFactory;

    protected $table = "Informasi_Pengangkutan";
    protected $primaryKey = "ID_Informasi";
    protected $fillable = [
        "ID_Petugas",
        "Wilayah_Pengangkutan",
        "Tanggal_Pengangkutan",
        "Jam_Pengangkutan",
        "Status_Pengangkutan",
    ];

    public static function getWilayahOptions()
    {
        return [
            'Batu Ampar',
            'Bengkong',
            'Bulang',
            'Galang',
            'Lubuk Baja',
            'Nongsa',
            'Sagulung',
            'Sei Beduk',
            'Sekupang',
            'Batam Kota',
            'Belakang Padang',
            'Batu Aji',
        ];
    }

    public function PetugasTable()
    {
        return $this->belongsTo(PetugasModel::class, 'ID_Petugas');
    }
}
