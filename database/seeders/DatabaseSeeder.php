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
            'nama' => 'Dwimas Budi Sulistyo',
            'username' => 'dwimasbudi',
            // 'email' => 'dwimasbudi@gmail.com',
            'password' => bcrypt('password')
        ]);


        // Kecanduan
        Kecanduan::create([
            'kode_kecanduan' => 'P01',
            'nama_kecanduan' => 'Kecanduan Ringan',
        ]);
        Kecanduan::create([
            'kode_kecanduan' => 'P02',
            'nama_kecanduan' => 'Kecanduan Sedang',
        ]);
        Kecanduan::create([
            'kode_kecanduan' => 'P03',
            'nama_kecanduan' => 'Kecanduan Berat',
        ]);



        // Gejala

        Gejala::create([
            'kode_gejala' => 'G01',
            'nama_gejala' => 'Menggunakan media sosial diwaktu luang',
        ]);
        Gejala::create([
            'kode_gejala' => 'G02',
            'nama_gejala' => 'Menggunakan media sosial untuk hiburan tanpa mengabaikan kegiatan penting',
        ]);
        Gejala::create([
            'kode_gejala' => 'G03',
            'nama_gejala' => 'Berinteraksi seimbang antara daring dan tatap muka',
        ]);
        Gejala::create([
            'kode_gejala' => 'G04',
            'nama_gejala' => 'Adanya sosial media tidak menganggu aktivitas lain',
        ]);
        Gejala::create([
            'kode_gejala' => 'G05',
            'nama_gejala' => 'Sulit fokus pada kegiatan sehari-hari karena ingin memeriksa media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G06',
            'nama_gejala' => 'Mengurangi interaksi langsung dengan orang lain',
        ]);
        Gejala::create([
            'kode_gejala' => 'G07',
            'nama_gejala' => 'Menunda tidur untuk bermain sosial media',
        ]);
        Gejala::create([
            'kode_gejala' => 'G08',
            'nama_gejala' => 'Mengabaikan pekerjaan atau tugas sekolah',
        ]);
        Gejala::create([
            'kode_gejala' => 'G09',
            'nama_gejala' => 'Mengalami konflik dengan teman atau keluarga tentang penggunaan media sosial',
        ]);

        Gejala::create([
            'kode_gejala' => 'G10',
            'nama_gejala' => 'Merasa cemas ketika tidak bisa mengakses media sosial',
        ]);
        Gejala::create([
            'kode_gejala' => 'G11',
            'nama_gejala' => 'Terlalu banyak mengekspos privasi di sosial media',
        ]);
        Gejala::create([
            'kode_gejala' => 'G12',
            'nama_gejala' => 'Depresi atau kecemasan akibat penggunaan media sosial yang berlebihan ',
        ]);
        Gejala::create([
            'kode_gejala' => 'G133',
            'nama_gejala' => 'lebih memilih kehidupan di sosial media dari pada di kehidupan nyata ',
        ]);
        Gejala::create([
            'kode_gejala' => 'G14',
            'nama_gejala' => 'Kehilangan minat pada kegiatan lain',
        ]);
        Gejala::create([
            'kode_gejala' => 'G15',
            'nama_gejala' => 'Di kehidupan sehari-hari kurang percaya diri',
        ]);

        // BasisAturan
        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 1,
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 2,
            'value_cf' => 0.6,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 3,
            'value_cf' => 0.6,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 1,
            'gejala_id' => 4,
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 5,
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 6,
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 7,
            'value_cf' => 0.6,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 8,
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
            'gejala_id' => 9,
            'value_cf' => 0.6,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 10,
            'value_cf' => 0.8,
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

    }
}
