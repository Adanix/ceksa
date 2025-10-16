<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Mengenal & Memahami Apa Itu Penyakit Stunting Pada Anak',
                'slug' => 'mengenal-&-memahami-apa-itu-penyakit-stunting-pada-anak',
                'excerpt' => 'Stunting masih menjadi masalah serius yang di hadapi Indonesia. Berdasarkan data survey status gizi nasional (SSGI) tahun 2022, prevalensi stunting di Indonesia diangka 21,6%. Jumlah ini menurun dibandingkan tahun sebelumnya yaitu 24,4%.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Stunting masih menjadi masalah serius yang di hadapi Indonesia. Berdasarkan data survey status gizi nasional (SSGI) tahun 2022, prevalensi stunting di Indonesia diangka 21,6%. Jumlah ini menurun dibandingkan tahun sebelumnya yaitu 24,4%. Walaupun menurun, angka tersebut masih tinggi, mengingat target prevalensi stunting di tahun 2024 sebesar 14?n standard WHO di bawah 20%.</p>
                
                <p> <b> a. Pengertian stunting </b> </p>
                <p> - Menurut WHO (2015), stunting adalah gangguan tumbuh kembang anak yang disebabkan oleh kekurangan gizi kronis dan infeksi berulang, yang ditandai dengan tinggi badan atau tinggi badan di bawah normal. </p>
                <p> - Menurut WHO (2020), stunting adalah suatu kondisi menjadi pendek atau sangat pendek berdasarkan panjang/tinggi badan pada usia  kurang dari -2 standar deviasi (SD) pada kurva pertumbuhan WHO dan terjadi karena kondisi yang tidak dapat diubah lagi oleh nutrisi yang tidak memadai dan/atau infeksi berulang/penyakit kronis yang terjadi dalam 1.000 HPK.  </p>
                
                <p> <b> b. Penyebab stunting </b> </p>
                <p> Penyebab stunting meliputi asupan gizi dan status kesehatan, yang mencakup ketahanan pangan (ketersediaan, keterjangkauan dan akses terhadap makanan bergizi), lingkungan sosial (standar, pola makan bayi dan anak, kebersihan, pendidikan dan tempat kerja), lingkungan kesehatan (akses, layanan pencegahan), pengobatan dan lingkungan perumahan (air, sanitasi, kondisi bangunan).</p>
                <p> Ibu hamil dengan  asupan gizi buruk dan  penyakit menular akan melahirkan anak dengan berat badan lahir rendah (BBLR) dan/atau panjang badan tidak memenuhi standar.
                 Gizi yang baik tidak hanya ditentukan oleh jumlah makanan yang tersedia di tingkat rumah tangga, namun juga dipengaruhi oleh pola asuh orang tua seperti pemberian ASI kolostrum (ASI pertama), inisiasi menyusui, pemberian ASI dini (IMD), pemberian ASI eksklusif dan pengelolaan makanan pendamping ASI. 
                 Selain itu, faktor kesehatan lingkungan seperti akses terhadap air bersih, sanitasi yang memadai, dan  pengelolaan sampah juga sangat terkait dengan kejadian  penyakit menular pada anak.</p>
                 <p>   Penyebab tidak langsung  stunting dipengaruhi oleh beberapa faktor, antara lain kesenjangan ekonomi dan pendapatan, perdagangan, urbanisasi, globalisasi, sistem pangan, jaminan sosial, sistem kesehatan, pembangunan pertanian, dan pemberdayaan perempuan.
                 Untuk mengatasi penyebab stunting perlu adanya prasyarat antara lain: Komitmen politik, kebijakan implementasi, partisipasi pemerintah dan  sektor, serta kapasitas implementasi. </p>
                
                 <p> <b> c. Cara mencegah stunting </b> </p>
                 <p style="text-align: justify; text-indent: 0.5in;"> Berikut  tips mencegah stunting: </p>
                 <p> 1. Remaja putri Lakukan pemeriksaan anemia dan konsumsi suplemen darah.</p>
                 <p> 2. Selama kehamilan Sebaiknya periksakan status kehamilan Anda secara rutin  ke dokter. Penting juga untuk memastikan asupan nutrisi yang baik selama kehamilan. Dengan pola makan yang sehat dan suplementasi mineral yang cukup seperti zat besi, asam folat dan yodium.</p>
                 <p> 3. Balita </p>
                 <p>  a. Praktikkan pemberian ASI dini (IMD). Segera setelah bayi Anda lahir, segera lakukan IMD agar praktik pemberian ASI eksklusif berhasil. Kemudian, kunjungi dokter atau  Posyandu dan Puskesmas secara rutin untuk memantau tumbuh kembang anak Anda.</p>
                 <p>    b. Vaksinasi Perhatikan jadwal vaksinasi rutin yang dilakukan pemerintah agar anak terhindar dari berbagai  penyakit.</p>
                 <p>    c. ASI Eksklusif Berikan ASI Eksklusif pada bayi Anda sampai usia 6 (enam) bulan dan tetap konsumsi MPASI yang sehat dan bergizi.</p>
                 <p>    d. Lacak pertumbuhan dan perkembangan hingga terjadi penurunan berat badan.</p>
                <p> 4. Pola hidup bersih dan sehat   Menerapkan pola hidup bersih dan sehat seperti mencuci tangan sebelum makan, memastikan air minum bersih, buang air besar di toilet, sarana sanitasi yang sehat, dan lain-lain.</p>
                
                <p> <b> d. Dampak stunting </b> </p>
                <p style="text-align: justify; text-indent: 0.5in;"> Dampak permasalahan stunting di Indonesia : 
                <p>  1. Dampak terhadap kesehatan : </p>
                <p> a. Pertumbuhan lambat (berat badan lahir rendah, dwarfisme, pendek, kurus), hambatan perkembangan kognitif dan motorik.
                <p> b. Gangguan metabolisme di masa dewasa → risiko penyakit tidak menular (diabetes, obesitas, stroke,  jantung, dll).</p>
                <p> 2. Dampak ekonomi: Potensi kerusakan tahunan: 2-3% PDB.</p>
                <p> Penyebab stunting Ada beberapa faktor penyebab stunting antara lain: </p>
                <p> 1. Kurangnya asupan kalori.</p>
                <p> a. Faktor sosial ekonomi (kemiskinan).</p>
                <p> b. Rendahnya tingkat pendidikan dan pengetahuan tentang praktik pemberian makan  bayi dan balita (ASI yang cukup).</p>
                <p>   c. Peran protein hewani dalam MPASI.</p>
                <p>   d. Pengaruh budaya </p>
                <p> e. Ketersediaan bahan pangan lokal.</p>
                <p> 2. Permintaan meningkat.</p>
                <p>   a. Penyakit jantung bawaan.</p>
                <p>   b. Alergi terhadap susu sapi.</p>
                <p>   c. Bayi yang baru lahir memiliki berat badan lahir yang sangat rendah. </p>
                <p>   d. Gangguan metabolisme bawaan.</p>
                 
                <p> Infeksi kronik yang disebabkan kebersihan personal dan lingkungan yang buruk (diare kronis) dan penyakit-penyakit yang dapat dicegah oleh imunisasi (Tuberculosis / TBC, difteri, pertussis, dan campak).</p>',
                'category_id' => '1',
                'user_id' => '2',
                'gambar_id' => '1'
            ],
            [
                'title' => 'Anemia Defisiensi Besi pada Anak: Penyebab, Gejala, dan Upaya Pencegahan',
                'slug' => 'anemia-defisiensi-besi-pada-anak-penyebab-gejala-dan-upaya-pencegahan',
                'excerpt' => 'Anemia defisiensi besi (ADB) merupakan masalah defisiensi gizi yang paling umum terjadi pada anak di seluruh dunia, terutama di negara berkembang, termasuk Indonesia.Penyakit ini terjadi karena tubuh penderita kekurangan zat besi.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Anemia defisiensi besi (ADB) merupakan masalah defisiensi gizi yang paling umum terjadi pada anak di seluruh dunia, terutama di negara berkembang, termasuk Indonesia.Penyakit ini terjadi karena tubuh penderita kekurangan zat besi. Anemia adalah istilah untuk rendahnya nilai hemoglobin (Hb) tergantung pada usia dan jenis kelamin. Pada anak-anak, ADB adalah penyebab palingl umum terjadinya anemia.</p>
                
                <p> <b> a. Penyebab anemia </b> </p>
                
                <p style="text-align: justify; text-indent: 0.5in;"> Penyebab anemia defisiensi besi pada usia :</p>
                
                <p> 1. Bayi dibawah 1 tahun </p>
                <p> a. Cadangan zat besi yang tidak mencukupi, setiap tahunnya disebabkan oleh berat badan lahir rendah, kelahiran prematur, kelahiran kembar, pemberian ASI lengkap tanpa suplementasi zat besi, Susu formula memiliki kandungan zat besi yang rendah, pertumbuhan yang cepat dan anemia selama masa kehamilan.</p>
                <p> b. Alergi terhadap protein susu sapi Anak usia 1 s/d 2 tahun </p>
                <p> c. Asupan zat besi yang tidak mencukupi karena kurangnya makanan pendamping ASI atau konsumsi susu murni yang berlebihan.</p>
                <p> d. Obesitas Meningkatnya kebutuhan akibat infeksi berulang/kronis.</p>
                <p> e. Malabsorpsi.</p>
                
                <p> 2. Anak usia 2 s/d 5 tahun </p>
                <p>  a. Kurangnya zat besi akibat makanan yang tidak mengandung zat besi heme atau terlalu banyak minum susu.</p>
                <p>  b. Obesitas Meningkatnya kebutuhan akibat infeksi berulang/kronis (bakteri, virus atau parasit).</p>
                <p>   c. Kehilangan yang berlebihan akibat perdarahan (divertikulum/poliposis Meckel, dll).</p>
                
                <p> 3. Anak usia 5 tahun - remaja </p>
                <p> a. Keputihan berlebihan akibat pendarahan (misalnya infeksi cacing tambang) Menstruasi berlebihan pada remaja.</p>
                
                <p> <b> b. Gejala anemia </b> </p>
                
                <p style="text-align: justify; text-indent: 0.5in;"> Selain wajah pucat, gejala umum anemia pada anak menurut American Academy of Pediatrics and Child Health adalah: </p>
                <p> 1. Kulit atau mata menguning </p>
                <p> 2. Bibir pucat Kerutan  kelopak mata berkurang </p>
                <p>  3. Warna kuku anak tampak lebih terang dari biasanya </p>
                <p> 4 .Anak kesulitan berbicara atau tidak mau berbicara </p>
                <p> 5.Badan anak lemah </p>
                <p>  6. Anak mudah lelah </p>
                <p> 7. Tidur siang lebih lama atau lebih lama dari biasanya </p>
                <p> 8. Warna urine anak gelap seperti teh Selain tanda-tanda umum  di atas, American Academy of Pediatrics juga menjelaskan bahwa Anak anemia berat akan mengalami gejala lain seperti: </p>
                <p> a. Sesak napas atau sesak napas </p>
                <p>   b. Gagal jantung pada anak dengan detak jantung cepat </p>
                <p>  c. Sakit kepala Pusing atau kepala terasa ringan </p>
                <p>  d. Lengan atau kaki bengkak </p>
                <p>  e. Pingsan (kehilangan kesadaran) </p>
                <p>  f. Nyeri atau bengkak pada lidah </p>
                
                <p> Menurut situs resmi Cedars-Sinai Hospital di Amerika, anak-anak Orang yang  pertama kali mengalami periode.
                remaja putri mungkin juga mengalami siklus menstruasi yang tidak teratur atau bahkan tidak menstruasi sama sekali.</p>
                
                <p> <b> c. Pencegahan anemia </b> </p>
                
                <p> Upaya pencegahan dan penanggulangan anemia dilakukan dengan memberikan asupan zat besi yang cukup ke dalam tubuh untuk meningkatkan pembentukan hemoglobin.</p>
                
                <p> Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. 
                Meningkatkan asupan makanan sumber zat besi dengan pola makan bergizi seimbang, Makanan yang kaya sumber zat besi dari hewani contohnya hati, ikan, daging dan unggas, sedangkan dari nabati yaitu sayuran berwarna hijau tua dan kacang-kacangan.</p>
                
                <p> Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. 
                Untuk meningkatkan penyerapan zat besi dari sumber nabati perlu mengonsumsi buah-buahan yang mengandung vitamin C, seperti jeruk, jambu. Penyerapan zat besi dapat dihambat oleh zat lain, seperti tanin, fosfor, serat, kalsium, dan fitat.</p>
                
                <p> Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. 
                Suplementasi zat besi Keadaan dimana zat besi dari makanan tidak mencukupi kebutuhan terhadap zat besi, perlu didapat dari suplementasi zat besi.
                Pemberian suplemen zat besi secara rutin dalam jangka waktu tertentu dimaksudkan untuk meningkatkan kadar hemoglobin secara cepat dan harus terus meningkatkan simpanan zat besi  dalam tubuh.</p>
    
                <p>  Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. 
                Hindari mengonsumsi tablet suplemen darah (TTD) dengan: Teh dan kopi karena mengandung senyawa fitat dan tanin yang dapat mengikat zat besi menjadi senyawa  kompleks sehingga tidak dapat diserap. Tablet kalsium (kalsium) dalam dosis besar dapat menghambat penyerapan zat besi. Obat  maag  melapisi permukaan lambung untuk mengganggu penyerapan zat besi. Penyerapan zat besi akan semakin terhambat jika menggunakan obat maag yang mengandung kalsium.</p>',
                'category_id' => '3',
                'user_id' => '2',
                'gambar_id' => '2'
            ],
            [
                'title' => 'Malnutrisi Energi Protein pada Anak: Penyebab, Gejala, dan Pencegahan',
                'slug' => 'malnutrisi-energi-protein-pada-anak-penyebab-gejala-dan-pencegahan',
                'excerpt' => 'Malnutrisi energi protein (PEM) merupakan kelainan gizi umum pada anak yang  ditandai dengan defisiensi gizi.
                Kondisi ini secara spesifik menggambarkan anak yang mengalami kekurangan energi dan protein.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Malnutrisi energi protein (PEM) merupakan kelainan gizi umum pada anak yang  ditandai dengan defisiensi gizi.
                Kondisi ini secara spesifik menggambarkan anak yang mengalami kekurangan energi dan protein.Gizi yang cukup merupakan landasan berfungsinya organ tubuh dan tumbuh kembang anak, bila kurang dapat mengakibatkan gangguan.MEP  dibedakan menjadi dua jenis, yaitu: </p>
                <p>  1. MEP  sedang (sering disebut gizi buruk) </p>
                <p> 2. MEP berat (sering disebut gizi buruk).</p>
                <p> Gizi buruk sendiri dibedakan menjadi tiga jenis, yaitu marasmus, kwashiorkor atau kombinasi marasmus-kwashiorkor.</p>
                
                <p> <b> a. Penyebab </b> </p>
                
                <p style="text-align: justify; text-indent: 0.5in;"> Penyebab PEM adalah  penyakit lingkungan, karena terdapat sejumlah faktor yang saling berinteraksi menyebabkan penyakit ini, diantaranya </p>
                <p> 1. Faktor makanan Peran pola makan Menurut konsep klasik ada dua konsep .</p>
                <p> a. pola makan yang  cukup energi tetapi kurang protein, akan menyebabkan anak menderita kwashiorkor.</p>
                <p>  b. pola makan yang kurang energi, padahal gizinya seimbang.zat gizi (esensial),  juga akan  menyebabkan malnutrisi.</p>
                 
                <p> 2.faktor sosial, kepadatan penduduk, infeksi, kemiskinan dan lain-lain.</p>
                
                <p>   Peran faktor sosial seperti pantangan terhadap penggunaan bahan makanan tertentu yang diwariskan secara turun temurun dapat  mempengaruhi terjadinya PEM.Ada pantangan  berdasarkan agama, namun ada juga pantangan  berdasarkan tradisi yang diturunkan dari generasi ke generasi, namun jika pantangan tersebut berdasarkan agama maka akan sulit  diatasi.
                Apabila pantangan-pantangan tersebut didasari oleh kebiasaan atau tradisi,  tersebut dapat diatasi melalui pendidikan gizi yang baik yang diberikan secara berkesinambungan. Status gizi seseorang merupakan hasil interaksi seluruh aspek lingkungan, meliputi faktor fisik, biologis, dan budaya.</p>
                
                <p> Secara umum faktor  yang menentukan status gizi masyarakat khususnya anak adalah tingkat pendidikan orang tua, kondisi perekonomian, sumber pangan yang cukup, dan aspek kesehatan. Masing-masing faktor tersebut dapat mempengaruhi status gizi masyarakat baik secara  langsung maupun tidak langsung.
                KEP pada dasarnya  ditentukan oleh dua faktor.</p>
                <p>    1. Secara langsung.</p>
                <p> Terjadinya KEP pada balita bergantung pada pola makan dan ada  tidaknya penyakit menular.</p>
                <p>  2.Tidak Langsung Faktor ini antara lain dipengaruhi oleh kualitas dan kuantitas makanan yang dikonsumsi anak  yang ditentukan  oleh beberapa faktor penyebab tidak langsung yaitu: </p>
                <p>  a) Gizi dalam makanan b) Pembelian keluarga kekuasaan, termasuk pendapatan, harga pangan, dan pengeluaran keluarga untuk kebutuhan  selain makanan</p>
                <p>  c) Keyakinan ibu tentang pola makan dan kesehatan </p>
                <p>  d) Terjaga atau tidaknya kesehatan, termasuk kebersihan</p>
                <p>    e) Fenomena sosial dan kondisi lingkungan.</p>
                
                <p> <b> b. Gejala </b> </p>
                <p> Gejala Pada anak dengan malnutrisi energi protein tipe marasmus, mereka terlihat sangat kurus. Selain itu, bulunya akan terlihat seperti sutra jagung, tulang tubuhnya akan terlihat, dan kulitnya akan berkerut.</p>
                
                <p>  Pada anak-anak dengan malnutrisi energi protein tipe kwashiorkor, mereka mengalami pembengkakan, perut membuncit, dan kaki membesar. Mereka juga akan menunjukkan tanda-tanda seperti bintik coklat pada kulit  terkelupas dan rambut  mudah rontok.</p>
                
                <p> Pada malnutrisi campuran protein-energi, gejala marasmus dan kwashiorkor terjadi bersamaan</p>
                
                <p> <b> c. Pencegahan </b> </p>
                
                <p style="text-align: justify; text-indent: 0.5in;"> Pencegahan Malnutrisi energi protein  pada anak dapat dihindari dengan mengonsumsi makanan yang sehat dan seimbang yang meliputi:</p>
                
                <p> 1.Sumber karbohidrat seperti nasi, roti atau kentang </p>
                <p>  2. Sumber protein dan lemak seperti daging merah, ikan, telur atau unggas </p>
                <p>  3. Sumber mineral dan vitamin seperti buah-buahan, sayuran serta susu dan produk olahannya seperti keju atau yogurt. </p>
                <p> Selain pola makan sehat,  minum air putih juga penting jika diperlukan. dan keluarga Anda mengonsumsi makanan bergizi seimbang.</p>
                Dengan cara ini, kebutuhan nutrisi harian anak dapat tercukupi sepenuhnya.</p>',
                'category_id' => '2',
                'user_id' => '2',
                'gambar_id' => '3'
            ],
            [
                'title' => 'Stunting dan Cara Mengatasi Pencegahannya',
                'slug' => 'stunting-dan-cara-mengatasi-pencegahannya',
                'excerpt' => 'Stunting merupakan kondisi gagal pertumbuhan pada anak (pertumbuhan tubuh dan otak) akibat kekurangan gizi dalam waktu yang lama. Sehingga anak lebih pendek dari anak normal seusianya dan memiliki keterlambatan dalam berpikir.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Stunting merupakan kondisi gagal pertumbuhan pada anak (pertumbuhan tubuh dan otak) akibat kekurangan gizi dalam waktu yang lama. Sehingga anak lebih pendek dari anak normal seusianya dan memiliki keterlambatan dalam berpikir. Kekurangan gizi dalam waktu lama itu terjadi sejak janin dalam kandungan sampai awal kehidupan anak (1000 Hari Pertama Kelahiran). (Kemenkes RI, 2018)</p>
    
                <p> Stunting adalah kondisi ketika balita memiliki tinggi badan dibawah rata-rata. Hal ini diakibatkan asupan gizi yang diberikan, dalam waktu yang panjang, tidak sesuai dengan kebutuhan. Stunting berpotensi memperlambat perkembangan otak, dengan dampak jangka panjang berupa keterbelakangan mental, rendahnya kemampuan belajar, dan risiko serangan penyakit kronis seperti diabetes, hipertensi, hingga obesitas.</p>
                
                <p> Memang angka stunting Indonesia menurun dari 29 persen pada 2015 menjadi 27.6 persen tahun lalu. Adapun pada 2013 angka stunting nasional mencapai 37,2 persen. Namun angka tersebut masih di atas batas yang ditetapkan Organisasi Kesehatan Dunia (WHO) yaitu 20 persen.</p>
                
                <p>  Masalah stunting merupakan permasalahan gizi yang dihadapi dunia khususnya negara-negara miskin dan berkembang. Stunting merupakan kegagalan pertumbuhan akibat akumulasi ketidakcukupan nutrisi yang berlangsung lama mulai dari kehamilan sampai dengan usia 24 bulan. Banyak faktor yang menyebabkan tingginya kejadian stunting pada balita. Masyarakat belum menyadari stunting sebagai suatu masalah dibandingkan dengan permasalahan kurang gizi lainnya. (Mitra, 2015)</p>
                
                <p> <b> Pencegahan stunting dapat dilakukan dengan langkah sebagai berikut: </b> </p>
                
                <p>  1. Pemenuhan kebutuhan zat gizi bagi ibu hamil. Ibu hamil harus mendapatkan makanan yang cukup gizi, suplementasi zat gizi (tablet zat besi atau Fe) dan terpantau kesehatannya. Namun, kepatuhan ibu hamil untuk meminum tablet tambah darah hanya 33 %. Padahal mereka harus minimal mengkonsumsi 90 tablet selama kehamilan.</p>
                
                <p>   2. ASI eksklusif sampai umur 6 bulan dan setelah umur 6 bulan diberi makanan pendamping ASI (MPASI) yang cukup jumlah dan kualitasnya.</p>
                
                <p>  3.  Memantau pertumbuhan balita di posyandu merupakan upaya yang sangat strategis untuk mendeteksi dini terjadinya gangguan pertumbuhan.</p>
                
                <p> 4. Meningkatkan akses terhadap air bersih dan fasilitas sanitasi, serta menjaga kebersihan lingkungan. Sanitasi dan kebersihan untuk pertumbuhan anak yang sempurna intervensi gizi saja belum cukup untuk mengatasi masalah stunting. Faktor sanitasi dan kebersihan lingkungan berpengaruh pula untuk kesehatan ibu hamil dan tumbuh kembang anak, karena anak usia di bawah dua tahun rentan terhadap berbagai infeksi dan penyakit.</p>
                
                <p>  5. Rendahnya sanitasi dan kebersihan lingkungan pun memicu gangguan saluran pencernaan, yang membuat energi untuk pertumbuhan teralihkan kepada perlawanan tubuh menghadapi infeksi. Sebuah riset menemukan bahwa semakin sering seorang anak menderita diare, maka semakin besar pula ancaman stunting untuknya. (Kemenkes RI, 2016)</p>
                
                <p> Berbagai penelitian telah membuktikan bahwa terdapat pengaruh stunting terhadap perkembangan kognitif dan prestasi belajar anak yang dapat menurunkan produktivitas kerja sehingga pada akhirnya dapat menghambat pertumbuhan ekonomi dan meningkatkan kemiskinan di suatu negara. Pada kondisi stunting dapat terjadi gangguan pada proses pematangan neuron otak serta perubahan struktur dan fungsi otak yang dapat menyebabkan kerusakan permanen pada perkembangan kognitif. Kondisi ini menyebabkan kemampuan berpikir dan belajar anak terganggu dan pada akhirnya menurunkan tingkat kehadiran dan prestasi belajar. (Adilla Dwi Nur Yadika, 2019)</p>
                
                <p>  Oleh karena itu pengetahuan dan pemahaman mengenai pencegahan stunting melalui edukasi kesehatan sangat penting dalam upaya mencegah terjadinya stunting di masyarakat.</p>
                
                 
                
                <p> <b> Referensi: </b></p>
                
                <p> Adilla Dwi Nur Yadika, Khairun Nisa Berawi, Syahrul Hamidi Nasution . 2019.Pengaruh Stunting terhadap Perkembangan Kognitif dan Prestasi Belajar. Majority | Volume | Nomor | September 2019 |hal. 273 https://juke.kedokteran.unila.ac.id/ diakses tangal 10/11/2022</p>
                
                <p> Kementerian Kesehatan RI.2016. Pedoman Hidup Bersih dan Sehat. Direktorat Promosi Kesehatan dan Pemberdayaan Masyarakat. https://promkes.kemkes.go.id/diakses tgl 10/11/2022</p>
                
                <p> Kementerian Kesehatan RI. 2018. Stunting Ancaman Generasi Masa depan Indonesia.https://p2ptm.kemkes.go.id/post/stunting-ancaman-generasi-masa-depan-indonesia/ diakses tgl 10/11/2022</p>
                
                <p> Mitra, 2015. Permasalahan Anak Pendek (Stunting) dan Intervensi untukMencegah Terjadinya Stunting (Suatu Kajian Kepustakaan) LPPM STIKes Hang Tuah Pekanbaru. Jurnal Kesehatan Komunitas, Vol. 2, No. 6, Mei 2015 hal. 269.</p>
                
                <p> https://jurnal.htp.ac.id/ diakses tgl 10/11/2022</p>
                
                <p> Sumber gambar: www. p2ptm.kemkes.go.id</p>
                
                <p> ( DOC, PROMKES,RSMH).</p>
                <p>Sumber : https://yankes.kemkes.go.id/view_artikel/2483/stunting-dan-pencegahannya</p>',
                'category_id' => '1',
                'user_id' => '2',
                'gambar_id' => '4'
            ],
            [
                'title' => 'Marasmus: Penyebab, Gejala, Diagnosis, dan Pengobatan Kekurangan Energi Protein pada Anak',
                'slug' => 'marasmus-penyebab-gejala-diagnosis-dan-pengobatan-kekurangan-energi-protein-pada-anak',
                'excerpt' => 'Marasmus adalah salah satu jenis malnutrisi yang parah, khususnya, kekurangan energi protein. Ini merupakan hasil dari kekurangan kalori secara keseluruhan. Termasuk semua makronutrien karbohidrat, lemak, dan protein.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Marasmus adalah salah satu jenis malnutrisi yang parah, khususnya, kekurangan energi protein. Ini merupakan hasil dari kekurangan kalori secara keseluruhan. Termasuk semua makronutrien karbohidrat, lemak, dan protein. </p>
        
                    <p> Kondisi ini dapat membuat tbuh kekurangan bahan bakar yang diperlukan untuk mempertahankan fungsi tubuh yang normal. Orang dengan marasmus bisa terlihat sangat kurus. Anak-anak mungkin terhambat dalam ukuran dan perkembangan. Marasmus yang berkepanjangan menyebabkan kelaparan.</p>
                    
                    <p> <b> Penyebab Marasmus </b> </p>
                    <p> Defisiensi nutrisi merupakan penyebab utama marasmus. Ini terjadi pada anak-anak yang tidak mengonsumsi cukup protein, kalori, karbohidrat, dan nutrisi penting lainnya. Ini biasanya karena kemiskinan dan kelangkaan makanan.</p>
                    
                    <p> Ada beberapa jenis malnutrisi. Seorang anak yang kekurangan gizi mungkin mengalami kondisi lain selain selain marasmus. Di antara jenis malnutrisi, yang lebih umum adalah defisiensi zat besi, yodium, zinc, dan vitamin A.</p>
                    
                    <p> <b> Faktor Risiko Marasmus</b></p>
                    <p> Sejumlah faktor dapat meningkatkan risiko mengembangkan marasmus. Tidak semua orang dengan faktor risiko akan mengalami marasmus. Faktor risiko marasmus meliputi:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Kelaparan kronis.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pasokan air yang terkontaminasi.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Persediaan makanan yang tidak memadai.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kekurangan vitamin, terutama vitamin A , E atau K.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pola makan yang buruk dan tidak seimbang, tertama kurang biji-bijian, buah-buahan dan sayuran, dan protein.</p>
                    <p> <b> Gejala Marasmus</b></p>
                    <p> Gejala utama marasmus adalah kekurangan berat badan. Anak-anak dengan kondisi ini telah kehilangan banyak massa otot dan lemak subkutan. Lemak subkutan adalah lapisan lemak tepat di bawah kulit. Kulit kering dan rambut rapuh juga merupakan gejala marasmus.</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">Pada anak-anak dengan marasmus, berikut ini juga dapat terjadi:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Diare kronis</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Infeksi pernapasan</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Cacat intelektual</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pertumbuhan terhambat</p>
                    <p>Anak-anak yang kekurangan gizi serius mungkin terlihat lebih tua dan memiliki sedikit atau tidak ada energi atau antusiasme untuk apa pun. Marasmus juga dapat membuat anak-anak cepat marah dan mudah tersinggung, tetapi ini biasanya merupakan gejala kwashiorkor yang lebih umum.</p>
                    
                    <p >Kwashiorkor adalah bentuk lain dari malnutrisi serius. Kwashiorkor menyebabkan penumpukan cairan di dalam tubuh yang dapat menyebabkan wajah menjadi bulat dan perut menjadi buncit.</p>
                    
                    <p> <b> Diagnosis Marasmus </b></p>
                    <p>  Dokter sering dapat membuat diagnosis awal marasmus melalui pemeriksaan fisik. Pengukuran, seperti tinggi dan berat badan, dapat membantu menentukan apakah seorang anak menderita marasmus.</p>
                    
                    <p>   Ketika pengukuran tersebut jauh di bawah ukuran yang seharusnya dimiliki oleh anak sehat pada usia tertentu, marasmus mungkin menjadi penyebabnya.</p>
                    
                    <p>   Kurangnya gerak pada anak yang kekurangan gizi juga dapat membantu memastikan diagnosis marasmus. Anak dengan kondisi tersebut cenderung kekurangan energi atau kemauan untuk melakukan apapun.</p>
                    
                    <p>  Marasmus sulit didiagnosis menggunakan tes darah. Hal ini karena banyak anak dengan marasmus juga mengalami infeksi yang dapat memengaruhi hasil tes darah.</p>
                    
                    <p> <b> Pengobatan Marasmus </b></p>
                    <p> Orang yang menjalani pengobatan untuk marasmus berisiko mengalami sindrom refeeding, komplikasi yang mengancam jiwa yang dapat terjadi ketika tubuh yang kekurangan gizi mencoba melakukan boot ulang terlalu cepat. Untuk itu, rehabilitasi dilakukan secara bertahap. </p>
                    
                    <p>  Idealnya, pengidap marasmus harus dirawat di rumah sakit, di bawah pengawasan medis yang ketat. Lalu, dokter akan mengantisipasi dan mengenali sindrom refeeding dapat membantu mencegah atau memperbaikinya dengan melengkapi kekurangan elektrolit dan zat gizi mikro.</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">  Berikut ini tahap pengobatan untuk marasmus:</p>
                    
                    <p> <b> 1. Tahap 1: Rehidrasi dan Stabilisasi </b></p>
                    <p>     Tahap pertama pengobatan difokuskan pada pengobatan dehidrasi, ketidakseimbangan elektrolit, dan defisiensi mikronutrien untuk mempersiapkan tubuh untuk refeeding. </p>
                    
                    <p>   Dalam banyak kasus, semua ini dapat diobati dengan satu formula, Solusi Rehidrasi untuk Nutrisi MAL (ReSoMal), yang diberikan secara oral atau melalui selang nasogastrik. </p>
                    
                    <p>    Penting juga untuk menjaga pengidap tetap hangat untuk mencegah hipotermia dan untuk mengobati infeksi, yang membahayakan sumber energi mereka yang sedikit. Tergantung pada individu, mungkin diperlukan beberapa jam hingga hari sebelum mereka dianggap cukup stabil untuk mulai memberi makan kembali.</p>
                    
                    <p> <b> 2. Tahap 2: Rehabilitasi Nutrisi </b></p>
                    <p> Refeeding dimulai secara perlahan dengan formula cair yang secara hati-hati menyeimbangkan karbohidrat, protein, dan lemak. Untuk pasien rawat inap, penyedia layanan kesehatan lebih memilih pemberian makanan melalui selang karena memungkinkan nutrisi bertahap tetapi berkelanjutan. </p>
                    
                    <p>  Kalori diperkenalkan sekitar 70 persen dari nilai normal yang direkomendasikan untuk usia seseorang. Hingga akhirnya dapat meningkat hingga 140 persen dari nilai yang direkomendasikan untuk memenuhi kebutuhan pertumbuhan anak-anak yang terhambat. </p>
                    
                    <p>  Fase ini dapat berlangsung dua hingga enam minggu. Selama waktu ini, pasien secara bertahap berkembang ke pemberian makanan oral yang lebih biasa dengan makanan padat.</p>
                    
                    <p> <b> 3. Tahap 3: Tindak Lanjut dan Pencegahan </b></p>
                    <p> Karena marasmus dapat kambuh, protokol perawatan lengkap mencakup pendidikan dan dukungan keluar untuk pasien dan/atau pengasuh mereka sebelum mereka dipulangkan. </p>
                    
                    <p>   Di negara berkembang, ini mungkin berarti dukungan menyusui, air minum yang aman dan pedoman persiapan makanan, imunisasi dan pendidikan untuk mencegah penyebaran penyakit. </p>
                    
                    <p>  Selain itu, pengasuh juga memerlukan panduan tentang cara mengenali tanda-tanda malnutrisi pada orang yang mereka rawat. Alat penyaringan universal malnutrisi (MUST) dapat membantu mengidentifikasi orang yang berisiko.</p>
                    
                    <p> <b> Komplikasi Marasmus </b></p>
                    <p>  Komplikasi yang berhubungan dengan marasmus atau malnutrisi sangat serius pada bayi dan anak-anak. Kurangnya nutrisi yang tepat dapat menyebabkan keterlambatan perkembangan fisik dan mental.</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;"> Komplikasi marasmus yang tidak diobati bisa serius dan mungkin termasuk:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Masalah tumbuh kembang pada anak.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Deformitas dan kerusakan sendi.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kehilangan kekuatan.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kehilangan penglihatan dan kebutaan.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kegagalan atau disfungsi organ.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Tidak sadar dan koma.</p>
                    <p> <b> Pencegahan Marasmus </b></p>
                    <p> Pola makan bergizi dan seimbang dengan banyak buah dan sayuran segar, biji-bijian, dan protein akan mengurangi risiko malnutrisi dan marasmus. Jika marasmus berhubungan dengan penyakit yang mendasarinya, maka carilah pengobatan yang tepat untuk penyakit tersebut.</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;"> Kamu mungkin dapat menurunkan risiko maramus dengan cara:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Makan makanan yang bergizi dan seimbang.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Membahas gejala dengan penyedia layanan kesehatan.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Minum air yang disanitasi dengan benar.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Mengikuti kursus pengobatan yang direkomendasikan untuk infeksi.</p>
                    <p> <b> Kapan Harus ke Dokter? </b></p>
                    <p> Penting untuk mengenali gejala malnutrisi sedini mungkin dan mencari pengobatan medis yang diperlukan. Jika dokter memberi resep obat, kamu bisa download Halodoc untuk cek kebutuhan medis kamu dengan mudah.</p>
                    
                    <p> <b> Referensi: </b></p>
                    <p> Cleveland Clinic. Diakses pada 2022. Marasmus.</p>
                    <p> Health Grades. Diakses pada 2022. Marasmus.</p>
                    <p> Healthline. Diakses pada 2022. What You Should Know About Marasmus.</p>
                    <p>Medical News Today. Diakses pada 2022. Marasmus: A Type Of Malnutrition.</p>
                    <p>Sumber : https://www.halodoc.com/kesehatan/marasmus</p>',
                'category_id' => '2',
                'user_id' => '2',
                'gambar_id' => '5'
            ],
            [
                'title' => 'Mencegah Stunting dengan Perbaikan Pola Makan, Pola Asuh dan Sanitasi',
                'slug' => 'mencegah-stunting-dengan-perbaikan-pola-makan-pola-asuh-dan-sanitasi',
                'excerpt' => 'Sebagian besar masyarakat mungkin belum memahami istilah yang disebut stunting. Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Sebagian besar masyarakat mungkin belum memahami istilah yang disebut stunting. Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.</p>
        
                    <p> Kondisi tubuh anak yang pendek seringkali dikatakan sebagai faktor keturunan (genetik) dari kedua orang tuanya, sehingga masyarakat banyak yang hanya menerima tanpa berbuat apa-apa untuk mencegahnya. Padahal seperti kita ketahui, genetika merupakan faktor determinan kesehatan yang paling kecil pengaruhnya bila dibandingkan dengan faktor perilaku, lingkungan (sosial, ekonomi, budaya, politik), dan pelayanan kesehatan. Dengan kata lain, stunting merupakan masalah yang sebenarnya bisa dicegah.</p>
                    
                    <p> Salah satu fokus pemerintah saat ini adalah pencegahan stunting. Upaya ini bertujuan agar anak-anak Indonesia dapat tumbuh dan berkembang secara optimal dan maksimal, dengan disertai kemampuan emosional, sosial, dan fisik yang siap untuk belajar, serta mampu berinovasi dan berkompetisi di tingkat global.</p>
                    
                    <p> “Terdapat tiga hal yang harus diperhatikan dalam pencegahan stunting, yaitu perbaikan terhadap pola makan, pola asuh, serta perbaikan sanitasi dan akses air bersih”, tutur Menteri Kesehatan RI, Nila Farid Moelok, di Jakarta (7/4).</p>
                    
                    <p>  Diterangkan Menkes Nila Moeloek, kesehatan berada di hilir. Seringkali masalah-masalah non kesehatan menjadi akar dari masalah stunting, baik itu masalah ekonomi, politik, sosial, budaya, kemiskinan, kurangnya pemberdayaan perempuan, serta masalah degradasi lingkungan. Karena itu, ditegaskan oleh Menkes, kesehatan membutuhkan peran semua sektor dan tatanan masyarakat.</p>
                    
                    <p> <b> 1) Pola Makan </b> </p>
                    
                    <p> Masalah stunting dipengaruhi oleh rendahnya akses terhadap makanan dari segi jumlah dan kualitas gizi, serta seringkali tidak beragam.</p>
                    
                    <p> Istilah “Isi Piringku” dengan gizi seimbang perlu diperkenalkan dan dibiasakan dalam kehidupan sehari-hari. Bagi anak-anak dalam masa pertumbuhan, memperbanyak sumber protein sangat dianjurkan, di samping tetap membiasakan mengonsumsi buah dan sayur.</p>
                    
                    <p>  Dalam satu porsi makan, setengah piring diisi oleh sayur dan buah, setengahnya lagi diisi dengan sumber protein (baik nabati maupun hewani) dengan proporsi lebih banyak daripada karbohidrat.</p>
                    
                    <p> <b> 2) Pola Asuh </b></p>
                    
                    <p>  Stunting juga dipengaruhi aspek perilaku, terutama pada pola asuh yang kurang baik dalam praktek pemberian makan bagi bayi dan Balita.</p>
                    
                    <p> Dimulai dari edukasi tentang kesehatab reproduksi dan gizi bagi remaja sebagai cikal bakal keluarga, hingga para calon ibu memahami pentingnya memenuhi kebutuhan gizi saat hamil dan stimulasi bagi janin, serta memeriksakan kandungan empat kali selama kehamilan.</p>
                    
                    <p> Bersalin di fasilitas kesehatan, lakukan inisiasi menyusu dini (IMD) dan berupayalah agar bayi mendapat colostrum air susu ibu (ASI). Berikan hanya ASI saja sampai bayi berusia 6 bulan.</p>
                    
                    <p> Setelah itu, ASI boleh dilanjutkan sampai usia 2 tahun, namun berikan juga makanan pendamping ASI. Jangan lupa pantau tumbuh kembangnya dengan membawa buah hati ke Posyandu setiap bulan.</p>
                    
                    <p>  Hal lain yang juga perlu diperhatikan adalah berikanlah hak anak mendapatkan kekebalan dari penyakit berbahaya melalui imunisasi yang telah dijamin ketersediaan dan keamanannya oleh pemerintah. Masyarakat bisa memanfaatkannya dengan tanpa biaya di Posyandu atau Puskesmas.</p>
                    
                    <p> <b> 3) Sanitasi dan Akses Air Bersih </b></p>
                    <p> Rendahnya akses terhadap pelayanan kesehatan, termasuk di dalamnya adalah akses sanitasi dan air bersih, mendekatkan anak pada risiko ancaman penyakit infeksi. Untuk itu, perlu membiasakan cuci tangan pakai sabun dan air mengalir, serta tidak buang air besar sembarangan.</p>
                    
                    <p>  “Pola asuh dan status gizi sangat dipengaruhi oleh pemahaman orang tua (seorang ibu) maka, dalam mengatur kesehatan dan gizi di keluarganya. Karena itu, edukasi diperlukan agar dapat mengubah perilaku yang bisa mengarahkan pada peningkatan kesehatan gizi
                    atau ibu dan anaknya”, tutupnya.</p>
                    
                    <p> <b> *Sekilas Mengenai Stunting* </b> </p>
                    
                    <p> Stunting merupakan ancaman utama terhadap kualitas manusia Indonesia,
                    juga ancaman terhadap kemampuan daya saing bangsa. Hal ini dikarenakan anak
                    stunted, bukan hanya terganggu pertumbuhan fisiknya (bertubuh
                    pendek/kerdil) saja, melainkan juga terganggu perkembangan otaknya, yang mana tentu akan sangat mempengaruhi kemampuan dan prestasi di sekolah,
                    produktivitas dan kreativitas di usia-usia produktif.</p>
        
                    <p> Plt. Kepala Biro Komunikasi dan Pelayanan Masyarakat</p>
        
                    <p> drg. Murti Utami, MPH.</p>
        
                    <p>Sumber : https://sehatnegeriku.kemkes.go.id/baca/rilis-media/20180407/1825480/cegah-stunting-dengan-perbaikan-pola-makan-pola-asuh-dan-sanitasi-2/</p>
                    ',
                'category_id' => '1',
                'user_id' => '2',
                'gambar_id' => '6'
            ],
            [
                'title' => 'Menggugah Kesadaran: Memahami Dampak Stunting pada Pertumbuhan Anak',
                'slug' => 'menggugah-kesadaran-memahami-dampak-stunting-pada-pertumbuhan-anak',
                'excerpt' => 'Stunting, sebagai fenomena pertumbuhan terhambat pada anak-anak, membutuhkan sorotan yang lebih tajam dalam upaya kita untuk menciptakan generasi yang sehat dan berkembang dengan optimal.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Stunting, sebagai fenomena pertumbuhan terhambat pada anak-anak, membutuhkan sorotan yang lebih tajam dalam upaya kita untuk menciptakan generasi yang sehat dan berkembang dengan optimal. Artikel ini bertujuan untuk menggugah kesadaran kita tentang dampak stunting pada pertumbuhan anak, memberikan pemahaman mendalam tentang masalah ini, serta mendorong langkah-langkah pencegahan yang lebih proaktif.</p>
        
                    <p> <b> 1. Mengenali Stunting sebagai Tantangan Kesehatan Global</b></p>
                    
                    <p>Stunting tidak hanya menjadi masalah lokal tetapi juga tantangan kesehatan global yang memengaruhi jutaan anak di seluruh dunia. Artikel ini akan membahas latar belakang stunting, menyoroti urgensi dan dampaknya pada kesehatan anak serta potensi konsekuensi jangka panjangnya.</p>
                    
                    <p> <b> 2. Perjalanan Pertumbuhan Anak dan Stunting</b></p>
                    <p> Dalam bagian ini, pembaca akan dibimbing melalui perjalanan pertumbuhan anak dan bagaimana stunting dapat merintangi tahap-tahap penting dalam perkembangan fisik dan kognitif. Melalui ilustrasi perbandingan perkembangan anak normal dan anak yang mengalami stunting, artikel ini akan menggambarkan betapa pentingnya pemahaman akan proses pertumbuhan.</p>
                    
                    <p> <b> 3. Dampak Stunting pada Kesehatan dan Kualitas Hidup</b></p>
                    
                    <p> Artikel akan membahas dampak stunting pada kesehatan anak, termasuk kerentanan terhadap penyakit infeksi, perkembangan otak yang terhambat, dan masalah kesehatan kronis. Dengan mendalamnya pemahaman tentang dampak ini, kita dapat lebih menghargai urgensi pencegahan stunting.</p>
                    
                    <p> <b> 4. Mengurai Faktor-faktor Penyebab Stunting</b></p>
                    
                    <p>Bagaimana stunting dapat terjadi? Artikel ini akan membahas faktor-faktor penyebab stunting, termasuk kekurangan gizi, lingkungan yang tidak sehat, dan praktik perawatan anak yang kurang optimal. Memahami akar masalah akan membuka jalan untuk langkah-langkah pencegahan yang lebih tepat.</p>
                    
                    <p> <b> 5. Langkah-langkah Pencegahan Stunting di Tingkat Komunitas</b></p>
                    
                    <p>Pentingnya pencegahan stunting akan ditonjolkan, dengan penekanan pada langkah-langkah praktis yang dapat diambil di tingkat komunitas. Melibatkan orang tua, tenaga kesehatan, dan pemangku kepentingan lainnya, artikel ini akan menyajikan solusi yang dapat diterapkan untuk mencegah stunting secara efektif.</p>
                    
                    <p> <b> 6. Mendidik Masyarakat tentang Pencegahan Stunting</b></p>
                    
                    <p>Artikel ini akan membahas pentingnya pendidikan dan kesadaran masyarakat dalam upaya pencegahan stunting. Bagaimana menyebarkan informasi mengenai gizi yang baik, praktik perawatan anak yang sehat, dan akses ke sumber daya kesehatan akan menjadi fokus, dengan harapan dapat menggugah kesadaran masyarakat secara luas.</p>
                    
                    <p> Melalui artikel ini, kami berharap dapat membantu membentuk persepsi masyarakat terhadap stunting, memberikan pemahaman yang lebih baik tentang dampaknya, dan mendorong partisipasi aktif dalam upaya pencegahan untuk membentuk masa depan anak-anak yang lebih cerah.</p>',
                'category_id' => '1',
                'user_id' => '2',
                'gambar_id' => '7'
            ],
            [
                'title' => 'Kwashiorkor: Penyebab, Gejala, Diagnosis, Pengobatan, dan Pencegahan Malnutrisi Protein',
                'slug' => 'kwashiorkor-penyebab-gejala-diagnosis-pengobatan-dan-pencegahan-malnutrisi-protein',
                'excerpt' => 'Kwashiorkor merupakan salah satu jenis kondisi dari malnutrisi akut yang terjadi karena kekurangan protein. Jika dibiarkan dapat menyebabkan retensi cairan, sehingga perut terlihat buncit.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Kwashiorkor merupakan salah satu jenis kondisi dari malnutrisi akut yang terjadi karena kekurangan protein. Jika dibiarkan dapat menyebabkan retensi cairan, sehingga perut terlihat buncit.</p>
                    
                    <p> Gangguan ini paling rentan terjadi pada anak-anak, terutama jika tidak mendapatkan nutrisi yang memadai setelah mereka tidak lagi mengonsumsi ASI. </p>
                    
                    <p> <b> Penyebab Kwashiorkor </b></p>
                    <p> Kwashiorkor adalah kondisi yang dapat disebabkan oleh kekurangan protein dalam makanan. Setiap sel dalam tubuh membutuhkan protein agar tubuh memperbaiki sel dan memproduksi sel baru, sehingga bisa beregenerasi terus-menerus.</p>
                    
                    <p> Saat tubuh kekurangan protein, pertumbuhan dan fungsi normal mulai merasakan dampak buruk dan bahkan berhenti bekerja. Pada akhirnya, kwashiorkor dapat terjadi.</p>
                    
                    <p> <b> Faktor Risiko Kwashiorkor </b></p>
                    <p>  Kondisi malnutrisi ini lebih sering terjadi pada negara-negara berkembang dengan tingkat kemiskinan yang tinggi. Selain itu, sistem sanitasi yang buruk serta penyebaran penyakit menular yang tinggi juga dapat memicu terjadinya masalah ini.</p>
                    
                    <p> Kwashiorkor dapat menyerang semua orang tanpa patokan usia, tetapi paling sering terjadi pada anak-anak, terutama yang berusia 3 hingga 5 tahun. Kondisi ini kerap terjadi pada bayi yang baru disapih, tetapi tidak mendapatkan nutrisi yang cukup untuk menggantikannya.</p>
                    
                    <p> <b> Gejala Kwashiorkor </b></p>
                    <p> Anak-anak yang mengidap kwashiorkor umumnya memiliki lemak tubuh yang sangat sedikit. Selain itu, bisa juga seorang anak tetap terlihat gemuk, tetapi tampilan ini disebabkan akibat cairan, bukan karena lemak atau otot.</p>
                    
                    <p>  Beberapa gejala lainnya yang mungkin terlihat, yaitu:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Perubahan warna rambut, mungkin terlihat kuning atau oranye.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Terserang dehidrasi.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kehilangan selera makan.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pembengkakan pada tungkai dan kaki.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kekurangan jaringan otot dan lemak.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Infeksi kulit yang lebih sering terjadi.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Penyembuhan luka yang lambat.</p>
                    <p> <b> Diagnosis Kwashiorkor </b></p>
                    <p>    Jika dokter mencurigai seseorang mengalami kwashiorkor, langkah awal yang dilakukan adalah pemeriksaan pembesaran dan pembengkakan pada hati. Setelah itu, tes darah dan urine dilakukan untuk memeriksa tingkat protein dan gula dalam darah.</p>
                    
                    <p> Selain itu, beberapa tes lainnya juga mungkin dilakukan untuk mencari kerusakan pada otot dan memastikan ginjal berfungsi dengan baik. Beberapa tes yang dilakukan, antara lain:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Pemeriksaan gas darah arteri.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pemeriksaan nitrogen urea darah.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pemeriksaan kadar kreatinin darah.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pemeriksaan kadar kalium darah.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Urinalisis.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Hitung darah lengkap.</p>
                    <p> <b> Komplikasi Kwashiorkor </b></p>
                    <p> Tanpa dilakukannya penanganan, kwashiorkor dapat menyebabkan komplikasi yang bisa jadi membahayakan pengidapnya, yaitu:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Gangguan kardiovaskular.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Infeksi saluran kemih.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Gangguan pencernaan.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Mengalami pembesaran hati.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Ketidakseimbangan elektrolit.</p>
                    <p>  Anak-anak yang mengalami kondisi ini bisa saja tidak tumbuh dengan maksimal akibat kekurangan gizi di usia muda.</p>
                    
                    <p>  Bahkan, kondisi ini juga membuat pengidapnya lebih rentan untuk terserang infeksi sebagai akibat dari pelemahan dari sistem imunitas. Jika dibiarkan dapat menyebabkan kematian. Maka dari itu, diagnosis dan pengobatan ini sangat penting untuk dilakukan.</p>
                    
                    <p> <b> Pengobatan Kwashiorkor </b></p>
                    <p> Gangguan malnutrisi ini bisa menjadi lebih baik dengan mengonsumsi lebih banyak makanan yang kaya protein serta kalori. Metode ini lebih efektif apabila penanganannya dilakukan sedini mungkin.</p>
                    
                    <p> Seseorang dengan kondisi ini diberikan lebih banyak kalori dalam bentuk karbohidrat, gula, dan lemak. Setelah mendapatkan energi, barulah makanan dengan kandungan protein diberikan. </p>
                    
                    <p> Peningkatan harus dilakukan secara perlahan agar tidak berlebihan. Juga, dokter akan merekomendasikan konsumsi suplemen vitamin dan mineral jangka panjang untuk sehari-hari.</p>
                    
                    <p> <b> Pencegahan Kwashiorkor </b></p>
                    <p>  Kwashiorkor dapat dicegah dengan memastikan seseorang mengonsumsi makanan yang cukup kalori dan protein setiap hari. Nah, berbagai makanan yang mengandung protein, seperti telur, makanan laut, kacang-kacangan, biji-bijian, dan lainnya.</p>
                    
                    <p>  Selain itu, peran pemerintah di negara tersebut juga perlu dilakukan untuk mencegah penyakit menular yang menyebar luas. Seseorang yang sakit membutuhkan lebih banyak nutrisi dan membuang kalori yang ada saat mengidap diare kronis.</p>
                    
                    <p>  Penyakit juga dapat menghabiskan berbagai sumber makanan dan bahkan menyebabkan kemiskinan. Sanitasi dan imunisasi yang lebih baik dapat membantu dalam mencegah anak-anak mengalami kondisi malnutrisi yang dapat berkembang menjadi kwashiorkor.</p>
                    
                    <p> <b> Kapan Harus ke Dokter? </b></p>
                    <p>    Apabila anak mengalami berbagai gejala yang mengarah pada malnutrisi atau kwashiorkor, sebaiknya segera memeriksakan kondisi tersebut. Jangan biarkan berlarut-larut karena dapat memengaruhi pertumbuhan anak, sehingga tidak maksimal.</p>
        
                    <p>  Referensi:</p>
                    <p>  Medical News Today. Diakses pada 2022. Why does malnutrition cause stomach bloating?</p>
                    <p> Healthline. Diakses pada 2022. What Is Kwashiorkor?</p>
                    <p> Cleveland Clinic. Diakses pada 2022. Kwashiorkor.</p>
                    <p>Sumber : https://www.halodoc.com/kesehatan/Kwashiorkor</p>',
                'category_id' => '4',
                'user_id' => '2',
                'gambar_id' => '8'
            ],
            [
                'title' => 'Waspadai Komplikasi Kwashiorkor pada Anak: Dampak Serius dan Penangananny',
                'slug' => 'waspadai-komplikasi-kwashiorkor-pada-anak-dampak-serius-dan-penangananny',
                'excerpt' => 'Kwashiorkor adalah salah satu jenis malnutrisi yang ditandai dengan kekurangan protein yang parah yang rentan dialami oleh anak-anak. Kondisi ini dapat menyebabkan retensi cairan dan perut tampak bengkak atau buncit.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Kwashiorkor adalah salah satu jenis malnutrisi yang ditandai dengan kekurangan protein yang parah yang rentan dialami oleh anak-anak. Kondisi ini dapat menyebabkan retensi cairan dan perut tampak bengkak atau buncit. Hal yang perlu diwaspadai, bila tak ditangani penyakit ini bisa menyebabkan komplikasi yang serius. </p>
        
                    </p> Kekurangan protein pada pengidap penyakit ini bisa menyebabkan terjadinya retensi cairan di jaringan (edema). Hal tersebut juga menjadi pembeda antara kwashiorkor dan bentuk malnutrisi lainnya. </p>
                    
                    <p> <b> Waspadai Komplikasi Kwashiorkor pada Anak </b></p>
                    <p style="text-align: justify; text-indent: 0.5in;"> Berikut ini komplikasi kwashiorkor pada anak jika kondisi tidak segera ditangani:</p>
                    
                    <p> <b> 1. Sirosis hati </b> </p>
                    <p>  Kekurangan protein yang dialami kwashiorkor dapat mengakibatkan sirosis hati pada anak. Sirosis merupakan penyakit hati yang menyebabkan munculnya jaringan parut, sehingga hati tidak berfungsi dengan baik. </p>
                    
                    <p>  Jaringan parut dapat menghalangi aliran darah melalui hati dan memperlambat kemampuannya untuk memproses nutrisi, hormon, dan obat-obatan, dan toksin alami (racun). Akibatnya hati tidak mampu memproduksi protein dan zat lain yang dibuat secara alami. Pada akhirnya hati tidak berfungsi secara optimal, yang dapat mengancam jiwa.</p>
                    
                    <p> <b> 2. Infeksi saluran kemih </b>< /p>
                    <p>  Komplikasi kwashiorkor berikutnya yaitu infeksi saluran kemih (ISK). Infeksi ini dapat menyerang ureter, ginjal, kandung kemih, dan uretra. Gangguan ini dapat menyebabkan lapisan saluran kemih menjadi merah dan mengalami peradangan (iritasi). </p>
                    
                    <p> <b> 3. Gangguan pencernaan </b> </p>
                    <p>   Anak yang mengalami kwashiorkor rentan mengalami gangguan pada sistem pencernaannya. Sebab, sistem pencernaan tidak dapat melakukan fungsinya dengan baik bila tubuh kekurangan asupan protein. </p>
                    
                    <p> <b> 4. Pertumbuhan anak terganggu </b> </p>
                    <p> Anak dengan kwashiorkor mungkin akan sulit tumbuh dengan tinggi badan yang ideal. Hal tersebut disebabkan kekurangan gizi pada usia dini. Kondisi tersebut membuatnya lebih rentan terhadap infeksi, melemahnya sistem kekebalan tubuh lemah, dan komplikasi lainnya. </p>
                    
                    <p> <b> Bagaimana Penanganan Kwashiorkor pada Anak? </b> </p>
                    <p style="text-align: justify; text-indent: 0.5in;"> Kekurangan gizi dapat mengakibatkan banyak perubahan pada tubuh anak, karena mempengaruhi fungsi setiap sistem organnya. Ada beberapa gejala kwashiorkor yang perlu diwaspadai, yaitu:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Edema atau pembengkakan pada tubuh.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Rambut tampak kering dan mudah rontok, bahkan berubah warna.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kulit tampak kering dan mengelupas disertai bercak bersisik.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Dermatitis atau lesi kulit.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Perut bengkak.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Massa otot berkurang.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Wajah tampak bulat.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Pembesaran hati.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Anak gagal tumbuh.</p>
                    <p>  Meskipun kondisi ini berhubungan dengan malnutrisi, tapi penanganannya tidak cukup hanya dengan memberi makan. Apalagi jika anak sudah terlalu lama kekurangan asupan protein dan nutrisi yang cukup, karena ia akan kesulitan untuk makan. </p>
                    
                    <p> Maka itu penting untuk memperkenalkan kembali makanan secara hati-hati untuk mencegah sindrom refeeding. Sindrom refeeding berkaitan dengan elektrolit dan pergeseran cairan, yang terjadi dengan pemberian makan dengan cepat pada anak yang kekurangan gizi.</p>
                    
                    <p> Sementara itu, beberapa anak dengan kwashiorkor juga mengalami intoleransi laktosa, sehingga mereka harus menghindari produk susu. Biasanya dokter merekomendasikan perawatan dengan memberikan karbohidrat, kemudian menambahkan protein, vitamin, dan mineral secara bertahap. Demi keamanan, pengenalan makanan kembali ini membutuhkan waktu seminggu atau lebih. </p>
                    
                    <p> <b> Referensi: </b> </p>
                    <p>  Cleveland Clinic. Diakses pada 2022. Kwashiorkor</p>
                    <p> Cleveland Clinic. Diakses pada 2022. Urinary Tract Infections.</p>
                    <p> WebMD. Diakses pada 2022. Inflammatory Bowel Disease.</p>
                    <p> Healthline. Diakses pada 2022. What Is Kwashiorkor?</p>
                    <p> Medical News Today. Diakses pada 2022. Why does malnutrition cause stomach bloating?.</p>
        
                    <p>Sumber : https://www.halodoc.com/artikel/ini-4-komplikasi-kwashiorkor-pada-anak-yang-perlu-diwaspadai</p>',
                'category_id' => '4',
                'user_id' => '2',
                'gambar_id' => '9'
            ],
            [
                'title' => 'Anemia sebagai Tanda Awal Kanker Usus Besar: Pentingnya Pemahaman dan Deteksi Dini',
                'slug' => 'anemia-sebagai-tanda-awal-kanker-usus-besar-pentingnya-pemahaman-dan-deteksi-dini',
                'excerpt' => 'Kanker usus besar bisa menimbulkan gejala anemia, kondisi ini ditunjukan dengan jumlah sel darah merah dan kadar hemoglobin yang lebih rendah dari biasanya. Anemia bisa jadi akibat langsung dari radiasi dan kemoterapi yang digunakan untuk mengobati kanker.',
                'body' => '<p style="text-align: justify; text-indent: 0.5in;">Kanker usus besar bisa menimbulkan gejala anemia, kondisi ini ditunjukan dengan jumlah sel darah merah dan kadar hemoglobin yang lebih rendah dari biasanya. Anemia bisa jadi akibat langsung dari radiasi dan kemoterapi yang digunakan untuk mengobati kanker. </p>
        
                    <p> Kondisi yang relatif umum yang disebabkan oleh sejumlah kondisi. Ada juga berbagai jenis anemia yang menjadi petunjuk seperti apa kondisi suatu penyakit sebenarnya. Begitu juga sebagai tanda kanker usus besar. Itulah pentingnya mencegah anemia agar tidak berujung pada penyakit lain.</p>
            
                    <p> <b> Anemia Sebagai Gejala Kanker </b> </p>
                    <p> Anemia defisiensi zat besi bisa menjadi tanda peringatan dini kanker dan sering terlewat oleh dokter. Dalam beberapa hal, kondisi ini merupakan kekeliruan yang bisa dimengerti, mengingat kondisi tersebut memengaruhi sekitar satu miliar orang di seluruh dunia. </p>
                    
                    <p> Anemia defisiensi zat besi bisa disebabkan oleh situasi kehidupan sehari-hari, seperti menstruasi, kehamilan, dan menyusui. Anak-anak juga bisa berisiko diakibatkan rendahnya kandungan zat besi dari makanan sehari-hari. </p>
                    
                    <p> Hal yang jarang terjadi pada pria sehat dan wanita pascamenopause, menunjukkan penyebab dasar yang lebih serius. Kanker adalah salah satu penyakit yang diwaspadai, terutama pada orang berusia di atas 50 tahun yang berisiko lebih besar terkena penyakit. </p>
                    
                    <p>  Penelitian menunjukkan bahwa lebih dari 30 persen pengidap kanker akan mengalami anemia pada saat didiagnosis dengan hampir setengahnya mengalami anemia defisiensi besi. Tingkat anemia semakin tinggi sekitar 67 persen dari pengidap kanker setelah pengobatan dijalani. </p>
                    
                    <p> <b> Hubungan Kanker Usus Besar dengan Anemia </b> </p>
                    <p>  Anemia berkaitan erat dengan kanker, mekanisme perkembangannya bisa bervariasi berdasarkan jenis keganasannya. Beberapa jenis kanker, seperti yang memengaruhi sumsum tulang, secara langsung memengaruhi kemampuan tubuh memproduksi sel darah merah, yang mengakibatkan anemia parah. </p>
                    
                    <p> Pada kanker usus besar, cara kerjanya agak berbeda. Perdarahan dianggap sebagai penyebab utama anemia saat usus besar terkena. Hal ini karena tumor melepaskan bahan kimia tertentu yang merangsang pembentukan pembuluh darah baru. Saat tumor tumbuh, pembuluh darah pecah, menyebabkan hilangnya sel darah merah. </p>
                    
                    <p>  Pendarahan pada saatnya bisa menyebabkan kekurangan zat besi Bahkan jika persediaan zat besi yang cukup di dalam darah, peradangan di sekitarnya bisa menyebabkan molekul besi menjadi “terperangkap” di dalam sel kekebalan. Saat peradangan berlanjut, ketersediaan zat besi menjadi semakin sedikit, mengakibatkan berkembangnya anemia defisiensi besi. </p>
                    
                    <p> <b> Gejala Awal Kanker Usus Besar yang Perlu Dikenali </b> </p>
                    <p>  Jika tes darah menunjukkan kamu mengalami anemia, jangan hindari untuk membicarakan tentang kanker. Terutama jika benar kamu mengalami gejala kanker. Dalam istilah kanker usus besar secara khusus, gejala paling umum yang bisa terjadi, yaitu:</p>
                    
                    <p style="text-align: justify; text-indent: 0.5in;">- Penurunan berat badan yang tidak diinginkan (sedang tidak diet atau mencoba menurunkan berat badan).</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kehilangan selera makan.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Mual atau muntah.</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Perubahan kebiasaan buang air besar (diare).</p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kotoran berwarna merah cerah atau berwarna lebih tua. </p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Kotoran yang lebih sedikit dari biasanya. </p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Merasa tidak lega ketika sudah buang air besar. </p>
                    <p style="text-align: justify; text-indent: 0.5in;">- Perut terasa tidak nyaman, kembung, sering nyeri gas, atau kram. </p>
                    <p>Itulah yang perlu diketahui mengenai anemia bisa jadi tanda awal kanker usus besar. Penting untuk tidak menyepelekan kondisi anemia dan memeriksakan kesehatan lebih lanjut.</p>
                    
                    <p> <b> Referensi: </b> </p>
                    
                    <p>  Very Well Health. Diakses pada 2021. Anemia as a Sign of Colon Cancer</p>
                    
                    <p>  American Cancer Society. Diakses pada 2021. Colorectal Cancer Signs and Symptoms</p>
                    <p>Sumber : https://www.halodoc.com/artikel/anemia-bisa-jadi-tanda-awal-kanker-usus-besar-ini-faktanya</p>
                    ',
                'category_id' => '3',
                'user_id' => '2',
                'gambar_id' => '10'
            ]
        ];

        foreach ($data as $key => $val) {
            Post::create($val);
        }
    }
}
