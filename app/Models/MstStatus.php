<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstStatus extends Model
{
    protected $table = 'mst_status';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'nama_status',
        'keterangan'
    ];
}
