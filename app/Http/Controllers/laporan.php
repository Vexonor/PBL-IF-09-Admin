<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use App\Models\PenanggungJawabModel;
use App\Models\PetugasModel;
use Illuminate\Http\Request;

class laporan extends Controller
{
    public function laporan()
    {
        $dataPengaduan = LaporanModel::with('UserTable', 'FotoTable')->get();
        $dataPetugas = PetugasModel::with('UserTable')->get();
        $dataPenanggungJawab = PenanggungJawabModel::with('PengaduanTable', 'PetugasTable')->get();
        return view('/laporan', [
            "title" => "Pengaduan",
            "dataPengaduan" => $dataPengaduan,
            "dataPetugas" => $dataPetugas,
            "dataPenanggungJawab" => $dataPenanggungJawab
        ]);
    }

    public function getKategori($kodeLaporan)
    {
        $pengaduan = LaporanModel::where('Kode_Laporan', $kodeLaporan)->first();

        return response()->json([
            'Kategori_Laporan' => $pengaduan ? $pengaduan->Kategori_Laporan : null,
            'Status_Laporan' => $pengaduan ? $pengaduan->Status_Laporan : null,
        ]);
    }


    public function updateLaporan(Request $request, $ID_Laporan)
    {
        $laporan = LaporanModel::findOrFail($ID_Laporan);

        $validateLaporan = $request->validate([
            'Status_Laporan' => 'required'
        ]);

        $status = $laporan->update($validateLaporan);
        if ($status) {
            return redirect()->back()->with('success', 'Status Pengaduan Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Status Pengaduan Gagal Diperbarui!');
        }
    }

    public function destroyLaporan($ID_Laporan)
    {
        $laporan = LaporanModel::findOrFail($ID_Laporan);

        $status = $laporan->delete($laporan);
        if ($status) {
            return redirect()->back()->with('success', 'Data Pengaduan Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data Pengaduan Gagal Dihapus!');
        }
    }

    public function storePenanggungJawab(Request $request)
    {
        $validatePenanggungJawab = $request->validate([
            'Kode_Laporan' => 'required',
            'Kategori_Laporan' => 'required',
            'Status_Laporan' => 'required',
            'ID_Petugas' => 'required'
        ]);

        $penanggungJawab = PenanggungJawabModel::create($validatePenanggungJawab);
        if ($penanggungJawab) {
            return redirect()->back()->with('success', 'Data Penanggung Jawab Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Penanggung Jawab Gagal Ditambahkan');
        }
    }

    public function updatePenanggungJawab(Request $request, $ID_PJ)
    {
        $penanggungJawab = PenanggungJawabModel::findOrFail($ID_PJ);
        $validatePenanggungJawab = $request->validate([
            'Kode_Laporan' => 'required',
            'Kategori_Laporan' => 'required',
            'Status_Laporan' => 'required',
            'ID_Petugas' => 'required'
        ]);

        $status = $penanggungJawab->update($validatePenanggungJawab);
        if ($status) {
            return redirect()->back()->with('success', 'Data Penanggung Jawab Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Data Penanggung Jawab Gagal Diperbarui!');
        }
    }

    public function destroyPenanggungJawab($ID_PJ)
    {
        $penanggungJawab = PenanggungJawabModel::findOrFail($ID_PJ);

        $status = $penanggungJawab->delete($penanggungJawab);
        if ($status) {
            return redirect()->back()->with('success', 'Data Penanggung Jawab Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data Penanggung Jawab Gagal Dihapus!');
        }
    }
}
