<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeKonten(Builder $query, $search): void
    {
        $query->whereHas('UserTable', function ($userQuery) use ($search) {
            $userQuery->where('Nama', 'LIKE', '%' . $search . '%')
                ->orWhere('Judul_Edukasi', 'LIKE', '%' . $search . '%');
        });
    }
}
