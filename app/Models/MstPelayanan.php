<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstPelayanan extends Model
{
    protected $table = 'mst_pelayanan';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'jenis_pelayanan',
        'keterangan'
    ];
}
