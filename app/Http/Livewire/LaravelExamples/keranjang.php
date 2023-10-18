<?php

namespace App\Http\Livewire\LaravelExamples;
use Livewire\Component;

class Keranjang extends Component
{
    public function render()
    {
        $keranjang = Keranjang::all();
        return view('livewire.laravel-examples.keranjang',['keranjang' => $keranjang]);
    }
}
