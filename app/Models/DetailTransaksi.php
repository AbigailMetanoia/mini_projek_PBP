<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $primaryKey = 'idtransaksi';
    protected $table = 'detail_transaksi';
    protected $fillable = [
        'idbuku',
        'tgl_kembali',
        'denda',
        'status',
        'iduser',
        'idpetugas',
    ];
    // use HasFactory;
}
