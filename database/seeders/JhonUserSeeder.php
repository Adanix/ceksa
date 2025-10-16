<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JhonUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
                'nama' => 'Maintener',
                'email' => 'maintener@gmail.com',
                'role' => 'maintener',
                'ttl' => '2011-01-17',
                'password' => bcrypt('123'),
            ],
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'ttl' => '2020-01-17',
                'password' => bcrypt('123'),
            ],
            [
                'nama' => 'Pengguna Aja',
                'email' => 'pengguna@gmail.com',
                'role' => 'responden',
                'ttl' => '2022-01-17',
                'password' => bcrypt('123'),
            ],
            [
                'nama' => 'Pengguna Satu',
                'email' => 'pengguna1@gmail.com',
                'role' => 'responden',
                'ttl' => '2021-01-17',
                'password' => bcrypt('123'),
            ],
            [
                'nama' => 'Pengguna Dua',
                'email' => 'pengguna2@gmail.com',
                'role' => 'responden',
                'ttl' => '2011-01-17',
                'password' => bcrypt('123'),
            ],
            [
                'nama' => 'Pengguna Tiga',
                'email' => 'pengguna3@gmail.com',
                'role' => 'responden',
                'ttl' => '2001-01-17',
                'password' => bcrypt('123'),
            ],
            [
                'nama' => 'Pengguna Empat',
                'email' => 'pengguna4@gmail.com',
                'role' => 'responden',
                'ttl' => '2011-01-17',
                'password' => bcrypt('123'),
            ],
            [
                'nama' => 'Responden',
                'email' => 'responden@gmail.com',
                'role' => 'responden',
                'ttl' => '2001-01-07',
                'password' => bcrypt('123'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
