<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        $data = [
            [
                'id' => '1',
                'name' => 'Superadmin',
                'email' => 'superadmin@app.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($data as $datum) {
            User::create($datum);
        }
    }
}