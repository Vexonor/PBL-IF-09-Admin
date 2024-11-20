<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class BankSampahModel extends Model
{
    use HasFactory;
    protected $table = "bank_sampah";
    protected $primaryKey = "ID_BankSampah";
    protected $fillable = [
        "Nama_Bank_Sampah",
        "Jenis_Sampah",
        "Nama_Pemilik",
        "No_Telp",
        "Titik_Koordinat",
        "Jam_Buka",
        "Jam_Tutup",
        "Status_Operasional"
    ];

    public function scopeBankSampah(Builder $query, $search): void
    {
        $query->where('Nama_Bank_Sampah', 'LIKE', '%' . $search . '%')
            ->orWhere('Nama_Pemilik', 'LIKE', '%' . $search . '%');
    }
}
