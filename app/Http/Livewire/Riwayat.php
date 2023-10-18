<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Riwayat extends Component
{
    public function render()
    {
        $detail_transaksi = Riwayat::all();
        return view('livewire.tables', ['detail_transaksi' => $detail_transaksi]);
    }
}
