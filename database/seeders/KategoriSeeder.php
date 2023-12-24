<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->truncate();
        $data = [
            [
                'id' => '1',
                'nama' => 'Peraturan DPRD',
            ],
            [
                'id' => '2',
                'nama' => 'Keputusan Pimpinan DPRD',
            ],
            [
                'id' => '3',
                'nama' => 'Keputusan DPRD',
            ],
            [
                'id' => '4',
                'nama' => 'Keputusan Sekretaris DPRD',
            ],
        ];

        foreach ($data as $datum) {
            Kategori::create($datum);
        }
    }
}
