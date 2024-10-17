<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informasiPengangkutan extends Controller
{
    public function informasiPengangkutan()
    {
        return view('/informasiPengangkutan', [
            "title" => "Informasi Pengangkutan"
        ]);
    }
}
