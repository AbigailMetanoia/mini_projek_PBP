<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $detail_transaksi = Riwayat::all();

        return view('livewire.tables', ['detail_transaksi' => $detail_transaksi]);
    }
}
