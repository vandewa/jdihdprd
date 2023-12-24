<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();
        $data = [
            ['nama' => 'Main Menu', 'parent_id' => null, 'urutan' => 1, 'slug' => 'main-menu'],

            ['nama' => 'Profil', 'parent_id' => 1, 'urutan' => 1, 'slug' => 'profil'],

            ['nama' => 'Profil OPD', 'parent_id' => 2, 'urutan' => 1, 'slug' => 'profil-opd'],
            ['nama' => 'Profil Pimpinan OPD', 'parent_id' => 2, 'urutan' => 2, 'slug' => 'profil-pimpinan-opd'],
            ['nama' => 'Visi Misi', 'parent_id' => 2, 'urutan' => 3, 'slug' => 'visi-misi'],
            ['nama' => 'Tupoksi', 'parent_id' => 2, 'urutan' => 4, 'slug' => 'tupoksi'],
            ['nama' => 'Personil', 'parent_id' => 2, 'urutan' => 5, 'slug' => 'personil'],
            ['nama' => 'Struktur', 'parent_id' => 2, 'urutan' => 6, 'slug' => 'struktur'],

            ['nama' => 'Profil Pimpinan', 'parent_id' => 3, 'urutan' => 1, 'slug' => 'profil-pimpinan'],
            ['nama' => 'LHKPN Pimpinan', 'parent_id' => 3, 'urutan' => 2, 'slug' => 'lhkpn-pimpinan'],
            ['nama' => 'Agenda Pimpinan', 'parent_id' => 3, 'urutan' => 3, 'slug' => 'agenda-pimpinan'],

            ['nama' => 'PPID', 'parent_id' => 1, 'urutan' => 2, 'slug' => 'ppid'],

            ['nama' => 'Profil PPID ', 'parent_id' => 12, 'urutan' => 1, 'slug' => 'profil-ppid'],
            ['nama' => 'Daftar Informasi Publik ', 'parent_id' => 12, 'urutan' => 2, 'slug' => 'daftar-informasi-publik'],
            ['nama' => 'SK PPID ', 'parent_id' => 12, 'urutan' => 3, 'slug' => 'sk-ppid'],
            ['nama' => 'Produk Hukum ', 'parent_id' => 12, 'urutan' => 4, 'slug' => 'produk-hukum'],
            ['nama' => 'Galeri PPID ', 'parent_id' => 12, 'urutan' => 5, 'slug' => 'galeri-ppid'],
            ['nama' => 'SOP PPID ', 'parent_id' => 12, 'urutan' => 6, 'slug' => 'sop-ppid'],
            ['nama' => 'Alur Permohonan Informasi ', 'parent_id' => 12, 'urutan' => 7, 'slug' => 'alur-permohonan-informasi'],

            ['nama' => 'Profil Singkat ', 'parent_id' => 13, 'urutan' => 1, 'slug' => 'profil-singkat'],
            ['nama' => 'Tugas PPID', 'parent_id' => 13, 'urutan' => 2, 'slug' => 'tugas-ppid'],
            ['nama' => 'Maklumat PPID', 'parent_id' => 13, 'urutan' => 3, 'slug' => 'maklumat-ppid'],
            ['nama' => 'Struktur PPID', 'parent_id' => 13, 'urutan' => 4, 'slug' => 'struktur-ppid'],

            ['nama' => 'JDIH Wonosobo', 'parent_id' => 16, 'urutan' => 1, 'slug' => 'jdih-wonosobo'],

            ['nama' => 'SOP Pelayanan Informasi Publik', 'parent_id' => 18, 'urutan' => 1, 'slug' => 'sop-pelayanan-informasi-publik'],
            ['nama' => 'SOP Penanganan Keberatan', 'parent_id' => 18, 'urutan' => 2, 'slug' => 'sop-penanganan-keberatan'],

            ['nama' => 'Transparansi Anggaran', 'parent_id' => 1, 'urutan' => 3, 'slug' => 'transparansi'],

            ['nama' => 'LHKASN', 'parent_id' => 27, 'urutan' => 1, 'slug' => 'lhkasn'],
            ['nama' => 'PERJANJIAN KINERJA', 'parent_id' => 27, 'urutan' => 2, 'slug' => 'perjanjian-kinerja'],
            ['nama' => 'CaLK', 'parent_id' => 27, 'urutan' => 3, 'slug' => 'calk'],
            ['nama' => 'LAPORAN ASET', 'parent_id' => 27, 'urutan' => 4, 'slug' => 'laporan-aset'],
            ['nama' => 'RENJA', 'parent_id' => 27, 'urutan' => 5, 'slug' => 'renja'],
            ['nama' => 'RENSTRA', 'parent_id' => 27, 'urutan' => 6, 'slug' => 'renstra'],
            ['nama' => 'POBL', 'parent_id' => 27, 'urutan' => 7, 'slug' => 'pobl'],
            ['nama' => 'PROGRAM KEGIATAN', 'parent_id' => 27, 'urutan' => 8, 'slug' => 'program-kegiatan'],
            ['nama' => 'REALISASI ANGGARAN', 'parent_id' => 27, 'urutan' => 9, 'slug' => 'realisasi-anggaran'],
            ['nama' => 'LKjIP', 'parent_id' => 27, 'urutan' => 10, 'slug' => 'lkjip'],
            ['nama' => 'DPA', 'parent_id' => 27, 'urutan' => 11, 'slug' => 'dpa'],
            ['nama' => 'RKA', 'parent_id' => 27, 'urutan' => 12, 'slug' => 'rka'],
            ['nama' => 'NERACA', 'parent_id' => 27, 'urutan' => 13, 'slug' => 'neraca'],

            ['nama' => 'Pengaduan Masyarakat', 'parent_id' => 1, 'urutan' => 4, 'slug' => 'pengaduan-masyarakat'],
            ['nama' => 'Lapor Bupati', 'parent_id' => 41, 'urutan' => 1, 'slug' => 'lapor-bupati'],

        ];

        foreach ($data as $datum) {
            Menu::create($datum);
        }
    }
}
