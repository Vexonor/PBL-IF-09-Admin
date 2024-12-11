<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenanggungJawabRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Kode_Laporan' => 'required|exists:Pengaduan,Kode_Laporan',
            'ID_Petugas' => 'required|exists:Petugas_Kebersihan,ID_Petugas',
            'Kategori_Laporan' => 'required|in:Pengumpulan Sampah,Tempat Sampah Liar,Kondisi TPS,Lainnya',
            'Status_Laporan' => 'required|in:Selesai,Sedang Diproses,Belum Selesai',
        ];
    }

    public function messages()
    {
        return [
            'Kode_Laporan.required' => 'Kode Laporan wajib diisi.',
            'Kode_Laporan.exists' => 'Kode Laporan tidak valid atau tidak ditemukan.',
            'ID_Petugas.required' => 'ID Petugas wajib diisi.',
            'ID_Petugas.exists' => 'ID Petugas tidak valid atau tidak ditemukan.',
            'Kategori_Laporan.required' => 'Kategori Laporan wajib diisi.',
            'Kategori_Laporan.in' => 'Kategori Laporan harus salah satu dari: Pengumpulan Sampah, Tempat Sampah Liar, Kondisi TPS, atau Lainnya.',
            'Status_Laporan.required' => 'Status Laporan wajib diisi.',
            'Status_Laporan.in' => 'Status Laporan harus salah satu dari: Selesai, Sedang Diproses, atau Belum Selesai.',
        ];
    }
}
