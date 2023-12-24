<?php

namespace Database\Seeders;

use App\Models\ComCode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'POLLING_TP_01', 'code_nm' => 'Sangat Puas', 'code_group' => 'POLLING_TP', 'code_value' => ''],
            ['code_cd' => 'POLLING_TP_02', 'code_nm' => 'Puas', 'code_group' => 'POLLING_TP', 'code_value' => ''],
            ['code_cd' => 'POLLING_TP_03', 'code_nm' => 'Cukup Puas', 'code_group' => 'POLLING_TP', 'code_value' => ''],
            ['code_cd' => 'POLLING_TP_04', 'code_nm' => 'Kurang Puas', 'code_group' => 'POLLING_TP', 'code_value' => ''],
        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}
