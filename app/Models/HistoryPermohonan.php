<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPermohonan extends Model
{
    protected $table = 'history_permohonan';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'id_permohonan',
        'verifikator',
        'status_pengajuan',
        'tgl_update',
        'catatan',
        'posisi',
    ];

    public function status() {
        return $this->belongsTo('App\Models\MstStatus', 'status_pengajuan', 'id');
    }

    public function petugas() {
        return $this->belongsTo('App\Models\User', 'verifikator', 'id');
    }

    public function permohonan() {
        return $this->belongsTo('App\Models\Permohonan', 'id', 'id_permohonan');
    }
}
