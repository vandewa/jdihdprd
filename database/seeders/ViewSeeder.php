<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("DROP VIEW IF EXISTS vw_dip");

        DB::statement("CREATE VIEW vw_dip AS select `link` AS `link`,
        `dpmptsp`.`transparansi_anggarans`.`nama` AS `nama`,
        `dpmptsp`.`transparansi_anggarans`.`jenis_informasi_publik_tp` AS `jenis_informasi_publik_tp` 
        from `dpmptsp`.`transparansi_anggarans` where (`dpmptsp`.`transparansi_anggarans`.`jenis_informasi_publik_tp` is not null) union all select 
        `dpmptsp`.`beritas`.`slug` AS `slug`,
        `dpmptsp`.`beritas`.`judul` AS `judul`,
        `dpmptsp`.`beritas`.`jenis_informasi_publik_tp` AS `jenis_informasi_publik_tp` 
        from `dpmptsp`.`beritas` where (`dpmptsp`.`beritas`.`jenis_informasi_publik_tp` is not null) union all select 
        `dpmptsp`.`menus`.`slug` AS `slug`,
        `dpmptsp`.`menus`.`nama` AS `nama`,
        `dpmptsp`.`menus`.`jenis_informasi_publik_tp` AS `jenis_informasi_publik_tp` 
        from `dpmptsp`.`menus` where (`dpmptsp`.`menus`.`jenis_informasi_publik_tp` is not null)
        ");
    }
}
