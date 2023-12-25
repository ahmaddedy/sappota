<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiPohon extends Model
{
    protected $table = 'referensi_pohon';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'jenis_pohon',
        'nama_latin',
        'keterangan',
        'gambar',
    ];
}
