<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $primaryKey = 'idtransaksi';
    protected $table = 'keranjang';
    use HasFactory;
}
