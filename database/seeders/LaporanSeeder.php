<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userList = DB::table('User')->where('role', 'Warga')->pluck('ID_User');

        for ($i = 0; $i < 10; $i++) {
            $imageFile = 'public/img/dokumenpendukung.jpg';

            // Path untuk dokumen pendukung
            $documentPath = 'dokumen_pengaduan/dokumen_' . $faker->unique()->numberBetween(1, 100) . '.pdf';
            $documentContent = 'Sample document content for testing.';

            // Simpan dokumen pendukung
            Storage::disk('public')->put($documentPath, $documentContent);
            $storedDocumentPath = str_replace('public/', '', $documentPath);

            // Ambil ID User yang terkait dengan laporan
            $userId = $faker->randomElement($userList);

            // Membuat beberapa foto untuk laporan
            $fotoPaths = [];
            for ($j = 0; $j < 3; $j++) { // Menambahkan lebih dari 2 foto
                $imagePath = 'foto_pengaduan/' . $faker->unique()->uuid . '.jpg';
                $imageContent = file_get_contents($imageFile);

                Storage::disk('public')->put($imagePath, $imageContent);
                $storedImagePath = str_replace('public/', '', $imagePath);

                // Menyimpan path foto untuk dikaitkan dengan laporan
                $fotoPaths[] = $storedImagePath;
            }

            // Menyisipkan data Pengaduan
            $laporanId = DB::table('Pengaduan')->insertGetId([
                'Kode_Laporan' => 'LPR-' . strtoupper($faker->unique()->bothify('###')),
                'ID_User' => $userId,
                'Kategori_Laporan' => $faker->randomElement(['Pengumpulan Sampah', 'Tempat Sampah Liar', 'Kondisi TPS', 'Lainnya']),
                'Deskripsi_Laporan' => $faker->sentence(20),
                'Titik_Koordinat' => $faker->latitude . ', ' . $faker->longitude,
                'Dokumen_Pendukung' => $storedDocumentPath,
                'Status_Laporan' => $faker->randomElement(['Selesai', 'Sedang Diproses', 'Belum Selesai']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Menyisipkan foto untuk laporan
            foreach ($fotoPaths as $fotoPath) {
                DB::table('Foto_Pengaduan')->insert([
                    'ID_Laporan' => $laporanId,
                    'Foto' => $fotoPath,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
