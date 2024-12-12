<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\LaporanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PengaduanMobileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = LaporanModel::all();
        return response()->json($pengaduan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatePengaduan = $request->validate([
            'ID_User' => 'required|string',
            'Kategori_Laporan' => 'required|string|max:255',
            'Deskripsi_Laporan' => 'required|string',
            'Titik_Koordinat' => 'required|string',
            'Dokumen_Pendukung' => 'required',
        ]);
        $validatePengaduan ['Status_Laporan'] = 'Belum Selesai';

        if ($request->hasFile('Dokumen_Pendukung')) {
            $file = $request->file('Dokumen_Pendukung');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/pengaduan', $filename, 'public');
            
            $validatePengaduan['Dokumen_Pendukung'] = $filePath;
        }

        $store = LaporanModel::create($validatePengaduan);

        if ($store) {
            return response()->json(['message' => 'Pengaduan berhasil ditambahkan'], 201);
        } else {
            return response()->json(['message' => 'Pengaduan gagal ditambahkan!'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laporan = LaporanModel::find($id);

        if (!$laporan) {
            return response()->json(['message' => 'Laporan tidak ditemukan'], 404);
        }

        return response()->json($laporan, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengaduan = LaporanModel::findOrFail($id);

        $validatePengaduan = $request->validate([
            'Kategori_Laporan' => 'required|string|max:255',
            'Deskripsi_Laporan' => 'required|string',
            'Titik_Koordinat' => 'required|string',
            'Dokumen_Pendukung' => 'nullable',
        ]);

        if ($request->hasFile('Dokumen_Pendukung')) {
            $filePath = storage_path('app/public/' . $pengaduan->Dokumen_Pendukung);
            if (file_exists($filePath)) {
                unlink($filePath);
            } else {
                Log::warning('File tidak ditemukan: ' . $filePath);
            }

            $file = $request->file('Dokumen_Pendukung');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/pengaduan', $filename, 'public');
            
            $validatePengaduan['Dokumen_Pendukung'] = $filePath;
        } else {
            Log::warning('Tidak ada file yang dikirim');
        }

        $update = $pengaduan->update($validatePengaduan);

        if ($update) {
            return response()->json(['message' => 'Pengaduan berhasil diperbarui', 'data' => $pengaduan], 200);
        } else {
            return response()->json(['message' => 'Pengaduan gagal diperbarui', 'data' => $pengaduan], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengaduan = LaporanModel::find($id);

        if (!$pengaduan) {
            return response()->json(['message' => 'Pengaduan tidak ditemukan'], 403);
        }

        if ($pengaduan->Dokumen_Pendukung) {
            $filePath = storage_path('app/public/' . $pengaduan->Dokumen_Pendukung);
            if (file_exists($filePath)) {
                unlink($filePath);
            } else {
                Log::warning('File tidak ditemukan: ' . $filePath);
            }
        }

        $pengaduan->delete();


        return response()->json(['message' => 'Pengaduan berhasil dihapus'], 201);
    }
}
