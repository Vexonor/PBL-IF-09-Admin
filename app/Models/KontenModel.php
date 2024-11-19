<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenModel extends Model
{
    protected $table = "Konten_Edukasi";
    protected $primaryKey = "ID_Edukasi";
    protected $fillable = [
        "ID_User",
        "Judul_Edukasi",
        "Link_URL",
        "Deskripsi_Edukasi",
        "Jenis_Edukasi",
        "Status_Konten",
        "Jumlah_Komentar",
        "Jumlah_Like"
    ];

    public function UserTable()
    {
        return $this->belongsTo(User::class, 'ID_User');
    }
}
