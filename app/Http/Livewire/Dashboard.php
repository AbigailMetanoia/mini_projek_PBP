<?php

namespace App\Http\Livewire;
use App\Models\ViewBooks;

use Livewire\Component;

class Dashboard extends Component
{
    // use WithPagination;
    public $search = '';


    public function render()
    {
        // $session = Auth::user()->id;
        // $users = User::whereNot('id','=',$session)
        // ->wherenot('role','=','admin')
        // ->wherenot('role','=','dinas')
        // ->where(function($quary){
        // $quary->where('name', 'like', '%'.$this->search.'%')
        //     ->orwhere('penempatan','like','%'.$this->search.'%')
        //     ->orwhere('role','like','%'.$this->search.'%')
        //     ->orwhere('email','like','%'.$this->search.'%')
        //     ->orwhere('status','like','%'.$this->search.'%');
        // })

        // ->orderBy('role','DESC')
        // ->when($this->showDinas,function($quary){
        //     $quary->orderBy('status','asc');
        // })
        // ->when($this->selesaiMagang,function($quary){
        //     $quary->orderBy('selesai_magang','DESC');
        // })
        // ->orderBy('name','ASC')
        // ->orderBy('penempatan','ASC')
        // ->orderBy('status','ASC')
        // ->paginate(10);

        $viewBooks = ViewBooks::where(function($quary){
            $quary->where('isbn','like','%'.$this->search.'%')
            ->orWhere('judul','like','%'.$this->search.'%')
            ->orWhere('idkategori','like','%'.$this->search.'%')
            ->orWhere('pengarang','like','%'.$this->search.'%')
            ->orWhere('penerbit','like','%'.$this->search.'%')
            ->orWhere('kota_terbit','like','%'.$this->search.'%')
            ->orWhere('editor','like','%'.$this->search.'%');
        })->get();
        return view('livewire.dashboard', ['view_books' => $viewBooks]);
    }



}
