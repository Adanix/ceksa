<?php

namespace Database\Seeders;

use App\Models\NilaiJawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiJawabanSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'jawaban' => 'Sangat Yakin',
                'nilai' => '1',
            ],
            [
                'jawaban' => 'Yakin',
                'nilai' => '0.8',
            ],
            [
                'jawaban' => 'Cukup Yakin',
                'nilai' => '0.6',
            ],
            [
                'jawaban' => 'Kurang Yakin',
                'nilai' => '0.4',
            ],
            [
                'jawaban' => 'Tidak Tahu',
                'nilai' => '0.2',
            ],
            [
                'jawaban' => 'Tidak',
                'nilai' => '0',
            ],
        ];

        foreach ($data as $key => $val) {
            NilaiJawaban::create($val);
        }
    }
}
