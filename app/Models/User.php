<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = "User";
    protected $primaryKey = "ID_User";
    protected $fillable = [
        'Nama',
        'NIK',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Alamat',
        'No_Telp',
        'Foto_Profil',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function AdminTable()
    {
        return $this->hasOne(AdminModel::class, 'ID_User');
    }

    public function PetugasTable()
    {
        return $this->hasOne(PetugasModel::class, 'ID_User');
    }
    public function PengaduanTable()
    {
        return $this->hasOne(LaporanModel::class, 'ID_User');
    }
}
