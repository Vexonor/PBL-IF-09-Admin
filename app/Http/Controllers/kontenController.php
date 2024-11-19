<?php

namespace App\Http\Controllers;

use App\Models\KontenModel;
use App\Models\User;
use Illuminate\Http\Request;

class kontenController extends Controller
{
    public function KontenController()
    {
        $dataKonten = KontenModel::with('UserTable')->get();
        $dataUser = User::all();
        return view('/kontenEdukasi', [
            "title" => "Konten Edukasi",
            "dataKonten" => $dataKonten,
            "dataUser" => $dataUser
        ]);
    }

    public function storeKonten(Request $request)
    {
        $validateKonten = $request->validate([
            'ID_User' => 'required',
            'Judul_Edukasi' => 'required',
            'Deskripsi_Edukasi' => 'required',
            'Link_URL' => 'required',
            'Jenis_Edukasi' => 'required',
        ]);

        $url = $validateKonten['Link_URL'];
        if (str_contains($url, 'youtube.com/watch')) {
            $validateKonten['Link_URL'] = parse_url($url, PHP_URL_QUERY);
            parse_str($validateKonten['Link_URL'], $params);
            $validateKonten['Link_URL'] = $params['v'] ?? $url;
        } elseif (str_contains($url, 'youtu.be/')) {
            $validateKonten['Link_URL'] = basename(parse_url($url, PHP_URL_PATH));
        } elseif (str_contains($url, 'youtube.com/live/')) {
            $validateKonten['Link_URL'] = basename(parse_url($url, PHP_URL_PATH));
        }

        $konten = KontenModel::create($validateKonten);

        if ($konten) {
            return redirect()->back()->with('success', 'Konten Edukasi Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Konten Edukasi Gagal Ditambahkan');
        }
    }

    public function updateKonten(Request $request, $ID_Edukasi)
    {
        $konten = KontenModel::findOrFail($ID_Edukasi);

        $validateKonten = $request->validate([
            'ID_User' => 'required',
            'Judul_Edukasi' => 'required',
            'Deskripsi_Edukasi' => 'required',
            'Link_URL' => 'required',
            'Jenis_Edukasi' => 'required',
        ]);

        $url = $validateKonten['Link_URL'];
        if (str_contains($url, 'youtube.com/watch')) {
            $validateKonten['Link_URL'] = parse_url($url, PHP_URL_QUERY);
            parse_str($validateKonten['Link_URL'], $params);
            $validateKonten['Link_URL'] = $params['v'] ?? $url;
        } elseif (str_contains($url, 'youtu.be/')) {
            $validateKonten['Link_URL'] = basename(parse_url($url, PHP_URL_PATH));
        } elseif (str_contains($url, 'youtube.com/live/')) {
            $validateKonten['Link_URL'] = basename(parse_url($url, PHP_URL_PATH));
        }

        $konten->update($validateKonten);

        if ($konten) {
            return redirect()->back()->with('success', 'Konten Edukasi Berhasil Diperbarui');
        } else {
            return redirect()->back()->with('error', 'Konten Edukasi Gagal Diperbarui');
        }
    }

    public function uploadKonten(Request $request, $ID_Edukasi)
    {
        $konten = KontenModel::findOrFail($ID_Edukasi);

        $konten->Status_Konten = "Telah Diunggah";
        $konten->save();

        return redirect()->back()->with('success', 'Konten Berhasil Diunggah');
    }

    public function destroyKonten($ID_Edukasi)
    {
        $konten = KontenModel::findOrFail($ID_Edukasi);

        $status = $konten->delete($konten);
        if ($status) {
            return redirect()->back()->with('success', 'Data Konten Edukasi Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data Konten Edukasi Gagal Dihapus!');
        }
    }
}
