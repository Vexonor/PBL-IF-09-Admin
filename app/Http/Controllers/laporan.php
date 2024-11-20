<?php

namespace App\Http\Controllers;

use App\Models\FotoModel;
use App\Models\LaporanModel;
use App\Models\PenanggungJawabModel;
use Illuminate\Support\Facades\Storage;
use App\Models\PetugasModel;
use App\Models\User;
use Illuminate\Http\Request;

class laporan extends Controller
{
    public function laporan(Request $request)
    {
        $search = request('search');
        $dataCount = $request->input('data_count', 10);
        $kategori = $request->input('kategori');
        $status = $request->input('status');
        $queryPengaduan = $dataPengaduan = LaporanModel::with('UserTable', 'FotoTable')->pengaduan($search)->latest();
        $dataPetugas = PetugasModel::with('UserTable')->get();
        $queryPenanggungJawab = $dataPenanggungJawab = PenanggungJawabModel::with('PengaduanTable', 'PetugasTable')->penanggungJawab($search)->latest();
        $user = User::where('role', 'Warga')->get();

        if ($kategori) {
            $queryPengaduan->where('Kategori_Laporan', $kategori);
            $queryPenanggungJawab->where('Kategori_Laporan', $kategori);
        }

        if ($status) {
            $queryPengaduan->where('Status_Laporan', $status);
            $queryPenanggungJawab->where('Status_Laporan', $status);
        }

        $dataPengaduan = $queryPengaduan->paginate($dataCount);
        $dataPenanggungJawab = $queryPenanggungJawab->paginate($dataCount);

        return view('/laporan', [
            "title" => "Pengaduan",
            "dataPengaduan" => $dataPengaduan,
            "dataPetugas" => $dataPetugas,
            "dataPenanggungJawab" => $dataPenanggungJawab,
            "user" => $user,
            "data_count" => $dataCount,
            "kategori" => $kategori,
            "status" => $status
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

    public function storeLaporan(Request $request)
    {
        $validatedData = $request->validate([
            'ID_User' => 'required',
            'Kategori_Laporan' => 'required',
            'Deskripsi_Laporan' => 'required',
            'Titik_Koordinat' => 'required',
            'Dokumen_Pendukung' => 'required|file',
        ]);

        $laporanData = [
            'ID_User' => $validatedData['ID_User'],
            'Kategori_Laporan' => $validatedData['Kategori_Laporan'],
            'Deskripsi_Laporan' => $validatedData['Deskripsi_Laporan'],
            'Titik_Koordinat' => $validatedData['Titik_Koordinat'],
        ];

        if ($request->hasFile('Dokumen_Pendukung')) {
            $dokumenPath = $request->file('Dokumen_Pendukung')->store('dokumen_pengaduan', 'public');
            $laporanData['Dokumen_Pendukung'] = $dokumenPath;
        }

        $laporan = LaporanModel::create($laporanData);

        if ($laporan) {
            if ($request->hasFile('Foto')) {
                $fotoPath = $request->file('Foto')->store('foto_pengaduan', 'public');
                $fotoData = [
                    'Foto' => $fotoPath,
                    'ID_Laporan' => $laporan->ID_Laporan,
                ];
                FotoModel::create($fotoData);
            }

            return redirect()->back()->with('success', 'Berhasil Membuat Pengaduan');
        }

        return redirect()->back()->with('error', 'Gagal Membuat Pengaduan');
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
