<?php

namespace App\Http\Livewire;

use App\Models\RatingBuku;
use Livewire\Component;

class ReviewBuku extends Component
{
    public $id;

    public function index()
    {
        $reviews = RatingBuku::all();

        return view('livewire.view-book', ['rating_buku' => $reviews]);
    }

    public function render()
    {
        return view('livewire.view-book');
    }
}
