<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingBuku extends Model
{
    protected $primaryKey = 'noktp';
    protected $table = 'rating_buku';
    protected $fillable = [
        'skor_rating',
        'isbn',
        'noktp',
        'tgl_rating'
    ];
    // use HasFactory;
}
