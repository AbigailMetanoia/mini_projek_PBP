<?php

namespace App\Http\Livewire;

use App\Models\Carts;
use Livewire\Component;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\Auth;

class Keranjang extends Component
{
    public $data;
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

    // $table->id();
    //         $table->string("idtransaksi", 20)->unique();
    //         $table->string("idbuku", 20);
    //         $table->string("tgl_kembali")->nullable();
    //         $table->string("denda")->nullable();
    //         $table->string("status")->default('Belum Dikembalikan');
    //         $table->string("iduser");
    //         $table->string("idpetugas", 100)->nullable();
    //         $table->timestamps();

    // $table->id();
    //         $table->string("isbn", 20);
    //         $table->string("judul", 100);
    //         $table->timestamps();

    public function pinjamBuku(){
        $user = Auth::user();
        $books = Carts::all();
        foreach ($books as $book) {
            DetailTransaksi::create([
                'idbuku' => $book->isbn,
                'iduser' => $user->noktp,
            ]);
            Carts::find($book->id)->delete();
        }
        $this->data = $books;

    }




    public function render()
    {
        $keranjang = Carts::all();
        return view('livewire.keranjang',[
            'keranjang' => $keranjang,
            'data' => $this->data,
        ]);
    }
}
