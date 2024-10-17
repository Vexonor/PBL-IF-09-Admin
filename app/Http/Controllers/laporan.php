<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laporan extends Controller
{
    public function laporan()
    {
        return view('/laporan', [
            "title" => "Laporan"
        ]);
    }
}
