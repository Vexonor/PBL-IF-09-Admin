<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bankSampah extends Controller
{
    public function bankSampah()
    {
        return view('/bankSampah', [
            "title" => "Bank Sampah"
        ]);
    }
}
