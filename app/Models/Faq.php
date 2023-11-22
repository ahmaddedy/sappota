<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faq';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'pertanyaan',
        'jawaban',
        'status'
    ];
}
