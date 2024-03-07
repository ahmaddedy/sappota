<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MstStatus;

class MstStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MstStatus::create([
            'nama_status' => 'Permohonan Dibuat',
            'keterangan' => 'Permohonan belum diajukan oleh pemohon, masih dalam bentuk draft',
        ]);

        MstStatus::create([
            'nama_status' => 'Diajukan',
            'keterangan' => 'Permohonan sudah diajukan oleh pemohon, menunggu diverifikasi',
        ]);

        MstStatus::create([
            'nama_status' => 'Verifikasi',
            'keterangan' => 'Permohonan diverifikasi oleh verifikator',
        ]);

        MstStatus::create([
            'nama_status' => 'Perbaikan Verifikasi',
            'keterangan' => 'Permohonan dikembalikan kepada pemohon untuk diperbaiki berdasarkan catatan verifikator',
        ]);

        MstStatus::create([
            'nama_status' => 'Disetujui Untuk Dilakukan Survei Lapangan',
            'keterangan' => 'Permohonan disetujui oleh verifikator, verifiktor akan memberikan estimasi jadwal survey lokasi yang akan dilakukan oleh Dinas',
        ]);

        MstStatus::create([
            'nama_status' => 'Upload Pernyataan Penyerahan Pohon Pengganti',
            'keterangan' => 'Pemohon mengupload pernyataan penggantian pohon setelah verifikator mengupload hasil survey lokasi',
        ]);

        MstStatus::create([
            'nama_status' => 'Penerbitan Surat Izin',
            'keterangan' => 'Verifikator membuat surat izin yang akan ditandatangani oleh kepala dinas',
        ]);

        MstStatus::create([
            'nama_status' => 'Penerbitan Surat Izin',
            'keterangan' => 'Verifikator membuat surat izin yang akan ditandatangani oleh kepala dinas',
        ]);

        MstStatus::create([
            'nama_status' => 'Ditolak',
            'keterangan' => 'Permohonan ditolak oleh verifikator dan verifiktor memberikan alasan penolakan',
        ]);
    }
}
