<?php

namespace Database\Seeders;

use App\Models\LinkTerkait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LinkTerkaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('link_terkaits')->truncate();
        $data = [
            [
                'nama' => 'JDIHN',
                'link' => 'https://jdihn.go.id/',
            ],
            [
                'nama' => 'JDIH Jawa Tengah',
                'link' => 'https://jdih.jatengprov.go.id/',
            ],
            [
                'nama' => 'JDIH Wonosobo',
                'link' => 'https://jdih.wonosobokab.go.id/',
            ],
            [
                'nama' => 'Perpustakaan JDIH Wonosobo',
                'link' => 'https://perpus.jdih.wonosobokab.go.id/',
            ],
        ];

        foreach ($data as $datum) {
            LinkTerkait::create($datum);
        }
    }
}
