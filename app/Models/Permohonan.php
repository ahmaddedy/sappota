<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table = 'permohonan';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'nik',
        'jenis_pelayanan',
        'alasan',
        'jenis_pemohon',
        'tgl_permohonan',
        'no_permohonan',
        'gambar_letak_pohon_site_plan',
        'scan_imb',
        'scan_izin_usaha',
        'scan_izin_penyambungan_jalan_masuk',
        'letak_pohon',
        'nama_pohon',
        'alamat_pohon',
        'kecamatan',
        'kelurahan',
        'jumlah_pohon',
        'jenis_pohon',
        'token',
        'surat_permohonan',
        'jenis_pohon_pengganti',
        'jumlah_pohon_pengganti',
        'lokasi_pohon_pengganti',
    ];

    public function pemohon() {
        return $this->belongsTo('App\Models\Pemohon', 'nik', 'nik');
    }

    public function pelayanan() {
        return $this->belongsTo('App\Models\MstPelayanan', 'jenis_pelayanan', 'id');
    }

    public function status() {
        return $this->belongsTo('App\Models\MstStatus', 'status_pengajuan', 'id');
    }

    public function history() {
        return $this->hasMany('App\Models\HistoryPermohonan', 'id', 'id_permohonan');
    }
}
