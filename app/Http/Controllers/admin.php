<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class admin extends Controller
{
    public function admin(Request $request)
    {
        $search = request('search');
        $dataCount = $request->input('data_count', 10);
        $status = $request->input('status');
        $query = $dataUser = AdminModel::with('UserTable')->admin($search)->latest();

        if ($status) {
            $query->where('Role_Admin', $status);
        }

        $dataUser = $query->paginate($dataCount);

        return view('/admin', [
            "title" => "Admin",
            "dataUser" => $dataUser,
            "data_count" => $dataCount,
            "status" => $status
        ]);
    }

    public function storeAdmin(Request $request)
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
        $validateUser['role'] = 'Admin';
        $validateUser['password'] = bcrypt($validateUser['password']);

        $user = User::create($validateUser);

        $validateAdmin = $request->validate([
            'Role_Admin' => 'required'
        ]);

        $admin = AdminModel::create([
            'ID_User' => $user->ID_User,
            'Role_Admin' => $validateAdmin['Role_Admin']
        ]);

        if ($user && $admin) {
            return redirect()->back()->with('success', 'Admin Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Admin Gagal Ditambahkan');
        }
    }

    public function updateAdmin(Request $request, $ID_User)
    {
        $user = User::findOrFail($ID_User);

        $validateUser = $request->validate(
            [
                'Nama' => 'required',
                'Jenis_Kelamin' => 'required',
                'Alamat' => 'required',
                'No_Telp' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $validateUser['password'] = bcrypt($validateUser['password']);

        $admin = AdminModel::where('ID_User', $ID_User)->first();
        if ($admin) {
            $admin->update(['Role_Admin' => $request->input('Role_Admin')]);
        }

        $status = $user->update($validateUser);
        if ($status) {
            return redirect()->back()->with('success', 'Data Admin Berhasil Diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Data Admin Gagal Diperbarui!');
        }
    }

    public function destroyAdmin($ID_User)
    {

        $user = User::findOrFail($ID_User);

        if ($user->Foto_Profil) {
            Storage::disk('public')->delete($user->Foto_Profil);
        }

        $status = $user->delete();
        if ($status) {
            return redirect()->back()->with('success', 'Data Admin Berhasil Dihapus');
        } else {
            return redirect()->back()->with('error', 'Data Admin Gagal Dihapus');
        }
    }
}