<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profils')->truncate();
        $data = [
            [
                'id' => '1',
                'isi' => '',
            ],
        ];

        foreach ($data as $datum) {
            Profil::create($datum);
        }
    }
}
