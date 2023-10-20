<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBuku extends Model
{
    protected $primaryKey = 'isbn';
    protected $table = 'komentar_bukus';
    protected $fillable =[
        'komentar',
        'isbn',
        'noktp'
    ];
    // use HasFactory;
}
