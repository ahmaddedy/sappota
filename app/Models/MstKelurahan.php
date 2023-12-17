<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstKelurahan extends Model
{
    protected $table = 'mst_kelurahan';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'kode',
        'kode_kecamatan',
        'nama',
    ];

    public function kecamatan() {
        return $this->belongsTo('App\Models\MstKecamatan', 'kode_kecamatan', 'kode');
    }
}
