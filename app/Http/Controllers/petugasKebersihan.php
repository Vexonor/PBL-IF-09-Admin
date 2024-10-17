<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasKebersihan extends Controller
{
    public function petugasKebersihan()
    {
        return view('/petugasKebersihan', [
            "title" => "Petugas Kebersihan"
        ]);
    }
}
