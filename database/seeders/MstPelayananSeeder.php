<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MstPelayanan;

class MstPelayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MstPelayanan::create([
            'jenis_pelayanan' => 'Penebangan',
            'keterangan' => 'Penebangan Pohon',
        ]);
        MstPelayanan::create([
            'jenis_pelayanan' => 'Pemindahan',
            'keterangan' => 'Pemindahan Pohon',
        ]);
        MstPelayanan::create([
            'jenis_pelayanan' => 'Pemangkasan',
            'keterangan' => 'Pemangkasan Pohon',
        ]);
    }
}
