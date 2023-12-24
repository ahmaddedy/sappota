<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstKecamatan extends Model
{
    protected $table = 'mst_kecamatan';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'kode';
    protected $fillable = [
        'kode',
        'nama',
    ];
}
