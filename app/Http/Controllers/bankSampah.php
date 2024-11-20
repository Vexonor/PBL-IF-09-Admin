<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankSampahModel;

class bankSampah extends Controller
{
    public function bankSampah(Request $request)
    {
        $search = request('search');
        $dataCount = $request->input('data_count', 10);
        $status = $request->input('status');
        $query = $dataBankSampah = BankSampahModel::bankSampah($search)->latest();

        if ($status) {
            $query->where('Status_Operasional', $status);
        }

        $dataBankSampah = $query->paginate($dataCount);

        return view('/bankSampah', [
            "title" => "Bank Sampah",
            "dataBankSampah" => $dataBankSampah,
            "data_count" => $dataCount,
            "status" => $status
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

    public function updateBankSampah(Request $request, $ID_BankSampah)
    {
        $bankSampah = BankSampahModel::findOrFail($ID_BankSampah);

        $validateBankSampah = $request->validate([
            'Nama_Bank_Sampah' => 'required',
            'Jenis_Sampah' => 'required',
            'Nama_Pemilik' => 'required',
            'No_Telp' => 'required',
            'Titik_Koordinat' => 'required',
            'Jam_Buka' => 'required',
            'Jam_Tutup' => 'required',
            'Status_Operasional' => 'required'
        ]);

        $status = $bankSampah->update($validateBankSampah);
        if ($status) {
            return redirect()->back()->with('success', 'Data Bank Sampah Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Data Bank Sampah Gagal Diperbarui!');
        }
    }

    public function destroyBankSampah($ID_BankSampah)
    {
        $bankSampah = BankSampahModel::findOrFail($ID_BankSampah);

        $status = $bankSampah->delete($bankSampah);
        if ($status) {
            return redirect()->back()->with('success', 'Data Bank Sampah Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data Bank Sampah Gagal Dihapus!');
        }
    }
}
