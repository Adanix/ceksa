<?php

namespace Database\Seeders;

use App\Models\Gambar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'file' => '1700046859_Artikel 1.jpg',
                'keterangan' => '1',
            ],
            [
                'file' => '1700046859_Artikel 2.jpg',
                'keterangan' => '2',
            ],
            [
                'file' => '1700046859_Artikel 3.jpg',
                'keterangan' => '3',
            ],
            [
                'file' => '1700046859_Artikel 4.jpg',
                'keterangan' => '4',
            ],
            [
                'file' => '1700046859_Artikel 5.jpg',
                'keterangan' => '5',
            ],
            [
                'file' => '1700046859_Artikel 6.jpg',
                'keterangan' => '6',
            ],
            [
                'file' => '1700046859_Artikel 7.jpg',
                'keterangan' => '7',
            ],
            [
                'file' => '1700046859_Artikel 8.jpg',
                'keterangan' => '8',
            ],
            [
                'file' => '1700046859_Artikel 9.jpg',
                'keterangan' => '9',
            ],
            [
                'file' => '1700046859_Artikel 10.jpg',
                'keterangan' => '10',
            ],
        ];

        foreach ($data as $key => $val) {
            Gambar::create($val);
        }
    }
}
