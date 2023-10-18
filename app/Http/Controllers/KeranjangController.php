<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::all();
        return view('livewire.laravel-examples.keranjang',['keranjang' => $keranjang]);
    }

    public function delete($id)
    {
        $item = Keranjang::find($id);

        if (!$item) {
            return redirect()->route('keranjang')->with('error', 'Item not found.');
        }

        $item->delete();

        return redirect()->route('keranjang')->with('success', 'Item deleted successfully.');
    }

}
