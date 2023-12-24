<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pemohon;

class PemohonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pemohon::create([
            'nik' => '7371121910940007',
            'nama' => 'Ahmad Dedy',
            'pekerjaan' => 'ASN',
            'email' => 'setiabudi19@gmail.com',
            'telp' => '09876543566',
            'alamat' => 'Antang',
            'file_ktp' => 'Antang',
        ]);
    }
}
