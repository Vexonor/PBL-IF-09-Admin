<?php

namespace App\Http\Controllers;

use App\Models\InformasiModel;
use App\Models\PetugasModel;
use Illuminate\Http\Request;

class informasiPengangkutan extends Controller
{
    public function informasiPengangkutan()
    {
        $dataInformasi = InformasiModel::with('PetugasTable')->get();
        $wilayahOptions = InformasiModel::getWilayahOptions();
        $dataUser = PetugasModel::with('UserTable')->get();

        return view('/informasiPengangkutan', [
            "title" => "Informasi Pengangkutan",
            "dataInformasi" => $dataInformasi,
            "wilayahOptions" => $wilayahOptions,
            "dataUser" => $dataUser
        ]);
    }


    public function storeInformasi(Request $request)
    {
        $validateInformasi = $request->validate([
            'ID_Petugas' => 'required',
            'Wilayah_Pengangkutan' => 'required',
            'Tanggal_Pengangkutan' => 'required',
            'Jam_Pengangkutan' => 'required',
            'Status_Pengangkutan' => 'required'
        ]);

        $informasi = InformasiModel::create($validateInformasi);

        if ($informasi) {
            return redirect()->back()->with('success', 'Informasi Pengangkutan Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Informasi Pengangkutan Gagal Ditambahkan');
        }
    }

    public function updateInformasi(Request $request, $ID_Informasi)
    {
        $informasi = InformasiModel::findOrFail($ID_Informasi);

        $validateInformasi = $request->validate(
            [
                'ID_Petugas' => 'required',
                'Wilayah_Pengangkutan' => 'required',
                'Tanggal_Pengangkutan' => 'required',
                'Jam_Pengangkutan' => 'required',
                'Status_Pengangkutan' => 'required'
            ]
        );

        $status = $informasi->update($validateInformasi);
        if ($status) {
            return redirect()->back()->with('success', 'Data Informasi Pengangkutan Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Data Informasi Pengangkutan Gagal Diperbarui!');
        }
    }

    public function destroyInformasi($ID_Informasi)
    {
        $informasi = InformasiModel::findOrFail($ID_Informasi);

        $status = $informasi->delete($informasi);
        if ($status) {
            return redirect()->back()->with('success', 'Data Informasi Pengangkutan Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data Informasi Pengangkutan Gagal Dihapus!');
        }
    }
}
