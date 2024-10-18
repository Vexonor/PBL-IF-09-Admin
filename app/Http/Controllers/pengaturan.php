<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengaturan extends Controller
{
    public function pengaturan()
    {
        return view('/pengaturan', [
            "title" => "Pengaturan"
        ]);
    }
}
