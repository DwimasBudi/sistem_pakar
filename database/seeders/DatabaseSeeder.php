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
            'kode' => 'P01',
            'nama' => 'Stress Ringan',
        ]);
        Kecanduan::create([
            'kode' => 'P02',
            'nama' => 'Stress Sedang',
        ]);
        Kecanduan::create([
            'kode' => 'P03',
            'nama' => 'Stress Berat',
        ]);
        Kecanduan::create([
            'kode' => 'P04',
            'nama' => 'GILA TIDAK TERTOLONG XIXIXI',
        ]);


        // Gejala

        Gejala::create([
            'kode' => 'G01',
            'nama' => 'Merasa sedikit cemas atau khawatir',
        ]);
        Gejala::create([
            'kode' => 'G02',
            'nama' => 'Kesulitan tidur sesekali atau terbangun di malam hari',
        ]);
        Gejala::create([
            'kode' => 'G03',
            'nama' => 'Perubahan mood ringan seperti sedih atau marah',
        ]);
        Gejala::create([
            'kode' => 'G04',
            'nama' => 'Merasa cemas atau khawatir secara berkala',
        ]);
        Gejala::create([
            'kode' => 'G05',
            'nama' => 'Kesulitan tidur yang berlangsung beberapa malam dalam seminggu',
        ]);
        Gejala::create([
            'kode' => 'G06',
            'nama' => 'Perubahan mood yang signifikan seperti rasa sedih',
        ]);
        Gejala::create([
            'kode' => 'G07',
            'nama' => 'Merasa sangat cemas atau panik secara rutin',
        ]);
        Gejala::create([
            'kode' => 'G08',
            'nama' => 'Gangguan tidur yang terjadi hampir setiap malam',
        ]);
        Gejala::create([
            'kode' => 'G09',
            'nama' => 'Perubahan mood yang signifikan dan berkepanjangan',
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
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 2,
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
            'Kecanduan_id' => 3,
            'gejala_id' => 7,
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 8,
            'value_cf' => 0.8,
        ]);

        BasisAturan::create([
            'Kecanduan_id' => 3,
            'gejala_id' => 9,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 4,
            'gejala_id' => 9,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 4,
            'gejala_id' => 8,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 4,
            'gejala_id' => 7,
            'value_cf' => 0.8,
        ]);
        BasisAturan::create([
            'Kecanduan_id' => 4,
            'gejala_id' => 6,
            'value_cf' => 0.8,
        ]);
    }
}
