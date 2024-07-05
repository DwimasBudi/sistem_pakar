<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Gejala;
use App\Models\Kecanduan;
use App\Models\BasisAturan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'username' => 'admin',
            'level' => 'admin',
            'jenis_kelamin' => 'Laki-laki',
            'umur' => '24',
            // 'email' => 'dwimasbudi@gmail.com',
            'password' => bcrypt('password')
        ]);


        // Kecanduan
        Kecanduan::create([
            'kode_kecanduan' => 'P01',
            'nama_kecanduan' => 'Kecanduan Ringan',
            'saran_kecanduan' => '<ul>
                <li>Tetapkan batas waktu harian untuk penggunaan media sosial, misalnya tidak lebih dari 3 jam per hari.</li>
                <li>Temukan aktivitas offline yang menyenangkan seperti membaca buku, berolahraga, atau berkumpul dengan teman dan keluarga.</li>
                <li>Ambil istirahat secara berkala selama penggunaan media sosial untuk menghindari penggunaan yang berkelanjutan.</li>
                <li>Gunakan aplikasi atau alat pemantauan untuk melacak waktu yang dihabiskan online dan evaluasi pola penggunaan.</li>
            </ul>',
        ]);
        Kecanduan::create([
            'kode_kecanduan' => 'P02',
            'nama_kecanduan' => 'Kecanduan Sedang',
            'saran_kecanduan' => '<ul>
                <li>Cari hobi atau aktivitas offline yang bisa menggantikan waktu yang biasanya dihabiskan di media sosial.</li>
                <li>Terapkan batasan penggunaan sosial media, seperti menggunakan timer atau parental control untuk membatasi akses ke aplikasi tertentu.</li>
                <li>Kurangi waktu penggunaan media sosial secara bertahap dengan target waktu yang realistis setiap minggunya.</li>
            </ul>',
        ]);
        Kecanduan::create([
            'kode_kecanduan' => 'P03',
            'nama_kecanduan' => 'Kecanduan Berat',
            'saran_kecanduan' => '<ul>
                <li>Buat jadwal harian yang terstruktur yang mencakup waktu untuk pekerjaan, kegiatan sosial, dan hobi offline.</li>
                <li>Libatkan keluarga dan teman dalam proses pemulihan kecanduan media sosial.</li>
                <li>Temui psikolog atau terapis yang memiliki pengalaman dalam menangani kecanduan media sosial.</li>
            </ul>',
        ]);



        // Gejala

        Gejala::create([
            'kode_gejala' => 'G01',
            'nama_gejala' => 'Menghabiskan waktu online lebih lama dari yang direncanakan',
        ]);
        Gejala::create([
            'kode_gejala' => 'G02',
            'nama_gejala' => 'Sulit membatasi waktu online meskipun berniat menguranginya',
        ]);
        Gejala::create([
            'kode_gejala' => 'G03',
            'nama_gejala' => 'Menggunakan media sosial sebagai pelarian dari masalah sehari-hari',
        ]);
        Gejala::create([
            'kode_gejala' => 'G04',
            'nama_gejala' => 'Menunda tugas-tugas kecil karena terlalu fokus pada aktivitas media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G05',
            'nama_gejala' => 'Menghabiskan banyak waktu luang untuk menggunakan media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G06',
            'nama_gejala' => 'Menarik diri dari kegiatan sosial untuk lebih banyak waktu menggunakan media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G07',
            'nama_gejala' => 'Penurunan kinerja akademis atau pekerjaan karena terlalu banyak waktu di media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G08',
            'nama_gejala' => 'Mengalami masalah tidur akibat penggunaan media sosial yang berlebihan',
        ]);
        Gejala::create([
            'kode_gejala' => 'G09',
            'nama_gejala' => 'Menggunakan media sosial untuk mengatasi perasaan negatif seperti sedih, cemas, atau stres secara konsisten',
        ]);

        Gejala::create([
            'kode_gejala' => 'G10',
            'nama_gejala' => 'Mengalami konflik dengan teman atau keluarga tentang penggunaan media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G11',
            'nama_gejala' => 'Mengalami masalah kesehatan fisik serius seperti gangguan penglihatan karena penggunaan berlebihan',
        ]);
        Gejala::create([
            'kode_gejala' => 'G12',
            'nama_gejala' => 'Perasaan Bahwa Aktualisasi Diri Lebih Mudah Dicapai media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G13',
            'nama_gejala' => 'Mengalami gangguan mental seperti depresi yang berkaitan dengan penggunaan media sosial berlebihan',
        ]);
        Gejala::create([
            'kode_gejala' => 'G14',
            'nama_gejala' => 'Mengabaikan hubungan keluarga dan persahabatan akibat fokus pada aktivitas media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G15',
            'nama_gejala' => 'Mengalami isolasi sosial yang serius dan hilangnya hubungan sosial yang penting akibat ketergantungan pada media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G16',
            'nama_gejala' => 'Penurunan Fungsi Sosial dan Komunikasi Antarpribadi',
        ]);

        // BasisAturan
        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 1,
            'value_cf' => 0.4,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 2,
            'value_cf' => 0.4,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 3,
            'value_cf' => 0.4,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 4,
            'value_cf' => 0.4,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 5,
            'value_cf' => 0.4,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 6,
            'value_cf' => 0.6,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 7,
            'value_cf' => 0.6,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 8,
            'value_cf' => 0.6,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 9,
            'value_cf' => 0.6,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 10,
            'value_cf' => 0.6,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 11,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 12,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 13,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 14,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 15,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 16,
            'value_cf' => 0.8,
        ]);

    }
}
