<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lokasiTPS extends Controller
{
    public function lokasiTPS()
    {
        return view('/lokasiTPS', [
            "title" => "Lokasi TPS"
        ]);
    }
}
