<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_gejala' => 'G1',
                'nama_gejala' => 'Apakah ibu memiliki riwayat penyakit anemia? (HB kurang dari 9 g/dl)',
            ],
            [
                'kode_gejala' => 'G2',
                'nama_gejala' => 'Apakah kulit anak terlihat pucat?',
            ],
            [
                'kode_gejala' => 'G3',
                'nama_gejala' => 'Apakah anak terlihat 5L (Lemah, Letih, Lesu, Lelah, dan Lalai) dan tidak aktif saat bermain?',
            ],
            [
                'kode_gejala' => 'G4',
                'nama_gejala' => 'Apakah selama kehamilan ibu tidak mengkonsumsi gizi seimbang sesuai anjuran? (makanan pokok (nasi/umbi umbian/jagung, dan lainnya), protein hewani (telur/ikan/daging dan lannya), protein nabati (tempe, tahu, kacang kacangan, dan lainnya), sayuran dan buah buahan)',
            ],
            [
                'kode_gejala' => 'G5',
                'nama_gejala' => 'Apakah panjang badan lahir anak kurang dari 47 cm?',
            ],
            [
                'kode_gejala' => 'G6',
                'nama_gejala' => 'Apakah berat badan anak saat lahir kurang dari 2500 gram dan usia lahir kurang dari 37 bulan?',
            ],
            [
                'kode_gejala' => 'G7',
                'nama_gejala' => 'Apakah anak sering terinfeksi penyakit atau sering sakit?',
            ],
            [
                'kode_gejala' => 'G8',
                'nama_gejala' => 'Apakah air yang digunakan untuk makan dan minum tidak layak dan tidak aman dikonsumsi? (belum terjamin keamanannya)',
            ],
            [
                'kode_gejala' => 'G9',
                'nama_gejala' => 'Apakah anak tidak mendapatkan MPASI sesuai buku KIA?',
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Apakah setiap kali makan anak tidak mendapatkan protein hewani (telur/ikan/daging) dan lainnya?',
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Apakah ubun-ubun anak melebar saat lahir atau seiring berjalannya waktu?',
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Apakah wajah anak terlihat sembab?',
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Apakah pusar pada anak menonjol?',
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Apakah anak mudah tersedak?',
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Apakah anak mengalami keterlambatan pertumbuhan (tinggi badan) dibandingkan anak seusianya?',
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Apakah anak mengalami kesulitan berbicara?',
            ],
            [
                'kode_gejala' => 'G17',
                'nama_gejala' => 'Apakah perut anak mengalami buncit?',
            ],
            [
                'kode_gejala' => 'G18',
                'nama_gejala' => 'Apakah leher anak relatif lebih pendek dan berlipat dibandingkan anak seusianya?',
            ],
            [
                'kode_gejala' => 'G19',
                'nama_gejala' => 'Apakah anak sering mengkonsumsi makanan manis dan berminyak?',
            ],
            [
                'kode_gejala' => 'G20',
                'nama_gejala' => 'Apakah wajah anak nampak tembem, bulat, dan bahu rangkap?',
            ],
        ];

        foreach ($data as $key => $val) {
            Gejala::create($val);
        }
    }
}
