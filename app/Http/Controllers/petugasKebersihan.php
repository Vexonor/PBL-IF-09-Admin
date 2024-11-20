<?php

namespace App\Http\Controllers;

use App\Models\PetugasModel;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class petugasKebersihan extends Controller
{
    public function petugasKebersihan(Request $request)
    {
        $search = request('search');
        $dataCount = $request->input('data_count', 10);
        $wilayah = $request->input('wilayah');
        $status = $request->input('status');
        $query = $dataUser = PetugasModel::with('UserTable')->petugas($search)->latest();
        $wilayahOptions = PetugasModel::getWilayahOptions();

        if ($wilayah) {
            $query->where('Wilayah_Bertugas', $wilayah);
        }

        if ($status) {
            $query->where('Status_Keaktifan', $status);
        }

        $dataUser = $query->paginate($dataCount);

        return view('/petugasKebersihan', [
            "title" => "Petugas Kebersihan",
            "wilayahOptions" => $wilayahOptions,
            "dataUser" => $dataUser,
            "data_count" => $dataCount,
            "wilayah" => $wilayah,
            "status" => $status
        ]);
    }

    public function storePetugas(Request $request)
    {
        $validateUser = $request->validate([
            'Nama' => 'required',
            'Tanggal_Lahir' => 'required',
            'Jenis_Kelamin' => 'required',
            'Alamat' => 'required',
            'No_Telp' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $validateUser['role'] = 'Petugas';
        $validateUser['password'] = bcrypt($validateUser['password']);

        $user = User::create($validateUser);

        $validatePetugas = $request->validate([
            'Wilayah_Bertugas' => 'required',
            'Tanggal_Bergabung' => 'required',
            'Status_Keaktifan' => 'required',
        ]);

        $petugas = PetugasModel::create([
            'ID_User' => $user->ID_User,
            'Wilayah_Bertugas' => $validatePetugas['Wilayah_Bertugas'],
            'Tanggal_Bergabung' => $validatePetugas['Tanggal_Bergabung'],
            'Status_Keaktifan' => $validatePetugas['Status_Keaktifan'],
        ]);

        if ($user && $petugas) {
            return redirect()->back()->with('success', 'Petugas Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Petugas Gagal Ditambahkan');
        }
    }

    public function updatePetugas(Request $request, $ID_User)
    {
        $user = User::findOrFail($ID_User);
        $validateUser = $request->validate(
            [
                'Nama' => 'required',
                'Jenis_Kelamin' => 'required',
                'Alamat' => 'required',
                'No_Telp' => 'required',
                'email' => 'required',
            ]
        );

        $statusUser = $user->update($validateUser);

        $petugas = PetugasModel::where('ID_User', $ID_User)->first();
        $validatePetugas = $request->validate([
            'ID_Petugas' => 'required',
            'Wilayah_Bertugas' => 'required',
            'Tanggal_Bergabung' => 'required',
            'Status_Keaktifan' => 'required'
        ]);

        $statusPetugas = $petugas->update($validatePetugas);

        if ($statusUser && $statusPetugas) {
            return redirect()->back()->with('success', 'Data Petugas Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Data Petugas Gagal Diperbarui!');
        }
    }

    public function destroyPetugas($ID_User)
    {

        $user = User::findOrFail($ID_User);

        if ($user->Foto_Profil) {
            Storage::disk('public')->delete($user->Foto_Profil);
        }

        $status = $user->delete();
        if ($status) {
            return redirect()->back()->with('success', 'Data Petugas Berhasil Dihapus');
        } else {
            return redirect()->back()->with('error', 'Data Petugas Gagal Dihapus');
        }
    }
}