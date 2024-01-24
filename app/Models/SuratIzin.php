<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratIzin extends Model
{
    protected $table = 'surat_izin';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'id_permohonan',
        'no_surat',
        'tgl_surat',
    ];

    public function permohonan() {
        return $this->belongsTo('App\Models\Permohonan', 'id_permohonan', 'id');
    }
}
