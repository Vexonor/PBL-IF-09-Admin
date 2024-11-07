<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = "Admin";
    protected $primaryKey = "ID_Admin";
    protected $fillable = [
        "ID_User",
        "Role_Admin",
    ];

    public function UserTable()
    {
        return $this->belongsTo(User::class, 'ID_User');
    }
}
