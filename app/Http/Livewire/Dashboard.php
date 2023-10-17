<?php

namespace App\Http\Livewire;
use App\Models\ViewBooks;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $viewBooks = ViewBooks::all();

        return view('livewire.dashboard', ['view_books' => $viewBooks]);
    }



}
