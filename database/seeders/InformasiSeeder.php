<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $petugas = DB::table('Petugas_Kebersihan')->pluck('ID_Petugas');

        foreach ($petugas as $id_petugas) {
            DB::table('Informasi_Pengangkutan')->insert([
                'ID_Petugas' => $id_petugas,
                'Wilayah_Pengangkutan' => $faker->randomElement([
                    'Batu Ampar',
                    'Bengkong',
                    'Bulang',
                    'Galang',
                    'Lubuk Baja',
                    'Nongsa',
                    'Sagulung',
                    'Sei Beduk',
                    'Sekupang',
                    'Batam Kota',
                    'Belakang Padang',
                    'Batu Aji'
                ]),
                'Tanggal_Pengangkutan' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                'Jam_Pengangkutan' => $faker->time('H:i:s'),
                'Status_Pengangkutan' => $faker->randomElement(['Selesai', 'Belum Selesai', 'Tertunda']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
