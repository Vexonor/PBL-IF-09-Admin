<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontenController extends Controller
{
    public function KontenController()
    {
        return view('/kontenEdukasi', [
            "title" => "Konten Edukasi"
        ]);
    }
}
