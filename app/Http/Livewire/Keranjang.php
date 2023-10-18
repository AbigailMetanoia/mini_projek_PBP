<?php

namespace App\Http\Livewire;

use App\Models\Carts;
use Livewire\Component;

class Keranjang extends Component
{
    public function deleteKeranjang($id)
    {
        Carts::find($id)->delete();
        session()->flash('message', "Data mahasiswa berhasil dihapus ");
        // $this->dispatchBrowserEvent('close-modal');
    }

    // public function deleteUser(int $user_id)
    // {
    //     $this->user_id = $user_id;
    //     $this->name = RegistrasiMahasiswa::find($user_id)->name;
    // }




    public function render()
    {
        $keranjang = Carts::all();
        return view('livewire.keranjang',[
            'keranjang' => $keranjang
        ]);
    }
}
