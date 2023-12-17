<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    protected $table = 'pemohon';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'nik',
        'nama',
        'telp',
        'email',
        'pekerjaan',
        'file_ktp',
        'alamat'
    ];
}
