<?php

namespace Database\Seeders;
use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jrs1 = new Jurusan();
        $jrs1->jrs = '11';
        $jrs1->nama_jrs = 'Sistem Informasi Akuntansi';
        $jrs1->fakultas = 'Teknik dan Informatika';
        $jrs1->save();

        $jrs1 = new Jurusan();
        $jrs1->jrs = '12';
        $jrs1->nama_jrs = 'Sistem Informasi ';
        $jrs1->fakultas = 'Teknik dan Informatika';
        $jrs1->save();

        $jrs1 = new Jurusan();
        $jrs1->jrs = '13';
        $jrs1->nama_jrs = 'Teknologi Komputer ';
        $jrs1->fakultas = 'Teknik dan Informatika';
        $jrs1->save();
    }
}
