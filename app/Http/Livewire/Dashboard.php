<?php

namespace App\Http\Livewire;
use App\Models\ViewBooks;

use Livewire\Component;

class Dashboard extends Component
{
    public $search = '';

    public function render()
    {
        $viewBooks = ViewBooks::all()
        ->where(function($query){
            $query->where('isbn','like','%'.$this->search.'%')
            ->orwhere('author','like','%'.$this->search.'%')
            ->orwhere('title','like','%'.$this->search.'%')
            ->orwhere('price','like','%'.$this->search.'%');
        })
        ->orderBy('id','ASC');


        return view('livewire.dashboard', ['view_books' => $viewBooks]);
    }



}
