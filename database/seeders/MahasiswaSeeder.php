<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nim = '11192938';
        $mhs1->nama_mhs = 'Selvy Permatahati';
        $mhs1->jurusan = 'Sistem Informasi Akuntansi';
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nim = '12190832';
        $mhs2->nama_mhs = 'Razqa Rafisqy';
        $mhs2->jurusan = 'Sistem Informasi';
        $mhs2->save();
    }
}
