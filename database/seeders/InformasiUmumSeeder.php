<?php

namespace Database\Seeders;

use App\Models\InformasiUmum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasi_umums')->truncate();
        $data = [
            [
                'id' => '1',
                'telepon' => '(0286) 321546',
                'email' => 'setwandprdwsb@gmail.com',
                'alamat' => 'Jln. Soekarno Hatta No. 6 Wonosobo',
                'fb' => '',
                'twitter' => '',
                'yt' => '',
                'ig' => '',
            ],
        ];

        foreach ($data as $datum) {
            InformasiUmum::create($datum);
        }
    }
}
