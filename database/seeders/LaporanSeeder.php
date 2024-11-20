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

        for ($i = 0; $i < 20; $i++) {
            $imageFile = 'public/img/dokumenpendukung.jpg';

            $documentPath = 'dokumen_pengaduan/dokumen_' . $faker->unique()->numberBetween(1, 100) . '.pdf';
            $documentContent = 'Sample document content for testing.';

            Storage::disk('public')->put($documentPath, $documentContent);
            $storedDocumentPath = str_replace('public/', '', $documentPath);

            $userId = $faker->randomElement($userList);

            $fotoPaths = [];
            for ($j = 0; $j < 3; $j++) {
                $imagePath = 'foto_pengaduan/' . $faker->unique()->uuid . '.jpg';
                $imageContent = file_get_contents($imageFile);

                Storage::disk('public')->put($imagePath, $imageContent);
                $storedImagePath = str_replace('public/', '', $imagePath);

                $fotoPaths[] = $storedImagePath;
            }

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