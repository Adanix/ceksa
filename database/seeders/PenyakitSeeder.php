<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_penyakit' => 'P1',
                'nama_penyakit' => 'Stunting',
                'solusi' => 'Stunting pada anak dapat menyebabkan keterlambatan pertumbuhan dan perkembangan, dan efek jangka panjang akan menimbulkan beberapa penyakit di masa yang akan datang. Agar anak dapat tumbuh sehat dan cerdas, optimalkan gizi anak sesuai dengan anjuran.',
            ],
            [
                'kode_penyakit' => 'P2',
                'nama_penyakit' => 'GAKY',
                'solusi' => 'Gangguan Akibat Kekurangan Yodium (GAKY) dapat diatasi dengan meningkatkan asupan yodium melalui konsumsi makanan kaya yodium seperti seafood, rumput laut. Selain itu, penggunaan garam beryodium dapat menjadi langkah preventif yang efektif untuk mengurangi risiko GAKY.',
            ],
            [
                'kode_penyakit' => 'P3',
                'nama_penyakit' => 'Anemia',
                'solusi' => 'Anemia pada balita dapat menyebabkan keterlambatan pertumbuhan dan kecerdasan. Untuk mengatasi anemia, perlu adanya peningkatan asupan makanan yang kaya zat besi. Makanan yang mengandung zat besi tinggi diantaranya adalah : daging merah, ayam, ikan, sayuran berdaun hijau, kacang-kacangan, dan sereal diperkaya zat besi. Rekomendasi : Perlu bertemu tenaga kesehatan dan melakukan pemeriksaan laboratorium untuk memastikan keadaan anemia.',
            ],
            [
                'kode_penyakit' => 'P4',
                'nama_penyakit' => 'Gizi Lebih',
                'solusi' => 'Gizi lebih atau obesitas pada anak dapat diatasi dengan mengonsumsi gizi seimbang dan aktivitas fisik. Penting untuk membatasi konsumsi gula, garam, dan lemak serta memastikan asupan kalori sesuai kebutuhan tubuh. Rekomendasi : Perlu adanya konsultasi dengan tenaga kesehatan, untuk mencapai berat badan ideal karena anak tidak bisa melakukan sembarangan diet ketat, berkaitan sedang dalam masa pertumbuhan yang membutuhkan zat gizi yang optimal.',
            ],
        ];

        foreach ($data as $key => $val) {
            Penyakit::create($val);
        }
    }
}
