<?php

namespace App\Http\Controllers;

use App\Models\PengangkutanModel;
use App\Models\TPSModel;
use App\Models\PetugasModel;
use Illuminate\Http\Request;

class lokasiTPS extends Controller
{
    public function lokasiTPS()
    {
        $dataTPS = TPSModel::all();
        $dataPengangkutan = PengangkutanModel::all();
        $dataUser = PetugasModel::with('UserTable')->get();
        $wilayahOptions = TPSModel::getWilayahOptions();
        return view('/lokasiTPS', [
            "title" => "Lokasi TPS",
            "dataTPS" => $dataTPS,
            "dataPengangkutan" => $dataPengangkutan,
            "wilayahOptions" => $wilayahOptions,
            "dataUser" => $dataUser
        ]);
    }

    public function storeTPS(Request $request)
    {
        $validateTPS = $request->validate([
            'Kode_TPS' => 'required|string|unique:Lokasi_TPS,Kode_TPS',
            'Wilayah_TPS' => 'required',
            'Titik_Koordinat' => 'required',
            'Status_TPS' => 'required'
        ]);

        $tps = TPSModel::create($validateTPS);

        if ($tps) {
            return redirect()->back()->with('success', 'Lokasi TPS Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Lokasi TPS Gagal Ditambahkan');
        }
    }

    public function updateTPS(Request $request, $ID_TPS)
    {
        $tps = TPSModel::findOrFail($ID_TPS);

        $validateTPS = $request->validate([
            'Kode_TPS' => 'required',
            'Wilayah_TPS' => 'required',
            'Titik_Koordinat' => 'required',
            'Status_TPS' => 'required'
        ]);


        $status = $tps->update($validateTPS);
        if ($status) {
            return redirect()->back()->with('success', 'Data Lokasi TPS Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Data Lokasi TPS Gagal Diperbarui!');
        }
    }

    public function destroyTPS($ID_TPS)
    {
        $tps = TPSModel::findOrFail($ID_TPS);

        $status = $tps->delete($tps);
        if ($status) {
            return redirect()->back()->with('success', 'Data Lokasi TPS Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data Lokasi TPS Gagal Dihapus!');
        }
    }

    // Jadwal Pengangkutan

    public function storePengangkutan(Request $request)
    {
        $validatePengangkutan = $request->validate([
            'Kode_TPS' => 'required',
            'ID_Petugas' => 'required',
            'Tanggal_Pengangkutan' => 'required',
            'Jam_Pengangkutan' => 'required',
            'Status_Pengangkutan' => 'required'
        ]);

        $pengangkutan = PengangkutanModel::create($validatePengangkutan);

        if ($pengangkutan) {
            return redirect()->back()->with('success', 'Jadwal Pengangkutan TPS Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Jadwal Pengangkutan TPS Gagal Ditambahkan');
        }
    }

    public function updatePengangkutan(Request $request, $ID_Pengangkutan)
    {
        $pengangkutan = PengangkutanModel::findOrFail($ID_Pengangkutan);

        $validatePengangkutan = $request->validate([
            'Kode_TPS' => 'required',
            'ID_Petugas' => 'required',
            'Tanggal_Pengangkutan' => 'required',
            'Jam_Pengangkutan' => 'required',
            'Status_Pengangkutan' => 'required'
        ]);

        $status = $pengangkutan->update($validatePengangkutan);
        if ($status) {
            return redirect()->back()->with('success', 'Data Jadwal Pengangkutan TPS Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Data Jadwal Pengangkutan TPS Gagal Diperbarui!');
        }
    }

    public function destroyPengangkutan($ID_Pengangkutan)
    {
        $pengangkutan = PengangkutanModel::findOrFail($ID_Pengangkutan);

        $status = $pengangkutan->delete($pengangkutan);
        if ($status) {
            return redirect()->back()->with('success', 'Data Jadwal Pengangkutan TPS Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data Jadwal Pengangkutan TPS Gagal Dihapus!');
        }
    }
}
