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
            'Kategori_Pengaduan' => 'required|string|max:255',
            'Deskripsi_Pengaduan' => 'required|string',
            'Titik_Koordinat' => 'required|string',
            'Gambar_Pengaduan' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
        $validatePengaduan ['Status_Pengaduan'] = 'Belum Selesai';

        if ($request->hasFile('Gambar_Pengaduan')) {
            $file = $request->file('Gambar_Pengaduan');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/pengaduan', $filename, 'public');
            
            $validatePengaduan['Gambar_Pengaduan'] = $filePath;
        }

        $store = LaporanModel::create($validatePengaduan);

        if ($store) {
            return response()->json(['message' => 'Berhasil menambah Pengaduan'], 201);
        } else {
            return response()->json(['message' => 'Gagal menambah Pengaduan!'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengaduan = LaporanModel::find($id);

        if (!$pengaduan) {
            return response()->json(['message' => 'Pengaduan tidak ditemukan!'], 404);
        }

        return response()->json($pengaduan, 200);
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

        if (!$pengaduan) { 
            return response()->json(['message' => 'Pengaduan tidak ditemukan!'], 404);
        }

        $validatePengaduan = $request->validate([
            'Kategori_Pengaduan' => 'required|string|max:255',
            'Deskripsi_Pengaduan' => 'required|string',
            'Titik_Koordinat' => 'required|string',
            'Gambar_Pengaduan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('Gambar_Pengaduan')) {
            $filePath = storage_path('app/public/' . $pengaduan->Gambar_Pengaduan);
            if (file_exists($filePath)) {
                $file = $request->file('Gambar_Pengaduan');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/pengaduan', $filename, 'public');
                
                $validatePengaduan['Gambar_Pengaduan'] = $filePath;
            } else {
                return response()->json(['message' => 'Terjadi kesalahan, Silakan coba lagi!', 'data' => $pengaduan], 500);
            }

            
        } else {
            return response()->json(['message' => 'Terjadi kesalahan, Silakan coba lagi!', 'data' => $pengaduan], 500);
        }

        $update = $pengaduan->update($validatePengaduan);

        if ($update) {
            return response()->json(['message' => 'Berhasil memperbarui Pengaduan', 'data' => $pengaduan], 200);
        } else {
            return response()->json(['message' => 'Gagal memperbarui Pengaduan!', 'data' => $pengaduan], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengaduan = LaporanModel::find($id);

        if (!$pengaduan) {
            return response()->json(['message' => 'Pengaduan tidak ditemukan!'], 404);
        }

        if ($pengaduan->Gambar_Pengaduan) {
            $filePath = storage_path('app/public/' . $pengaduan->Gambar_Pengaduan);
            if (file_exists($filePath)) {
                unlink($filePath);
            } else {
                Log::warning('File tidak ditemukan: ' . $filePath);
            }
        }

        $delete = $pengaduan->delete();

        if ($delete) {
            return response()->json(['message' => 'Berhasil menghapus Pengaduan'], 201);
        } else {
            return response()->json(['message' => 'Gagal menghapus Pengaduan!'], 403);
        }
    }
}
