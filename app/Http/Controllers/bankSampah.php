<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankSampahModel;

class bankSampah extends Controller
{
    public function bankSampah()
    {
        $dataBankSampah = BankSampahModel::all();

        return view('/bankSampah', [
            "title" => "Bank Sampah",
            "dataBankSampah" => $dataBankSampah
        ]);
    }

    public function storeBankSampah(Request $request)
    {

        $validate = $request->validate([
            'Nama_Bank_Sampah' => 'required',
            'Jenis_Sampah' => 'required',
            'Nama_Pemilik' => 'required',
            'No_Telp' => 'required',
            'Titik_Koordinat' => 'required',
            'Jam_Buka' => 'required',
            'Jam_Tutup' => 'required',
            'Status_Operasional' => 'required'
        ]);

        $bankSampah = BankSampahModel::create($validate);

        if ($bankSampah) {
            return redirect()->back()->with('success', 'Bank Sampah Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Bank Sampah Gagal Ditambahkan');
        }
    }

    public function destroyBankSampah(){
        
    }
}