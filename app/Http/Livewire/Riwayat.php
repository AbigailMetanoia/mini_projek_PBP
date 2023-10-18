<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DetailTransaksi;

class Riwayat extends Component
{
    public function render()
    {
        $detail_transaksi = DetailTransaksi::all();
        return view('livewire.tables', ['detail_transaksi' => $detail_transaksi]);
    }
}
