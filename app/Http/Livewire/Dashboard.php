<?php

namespace App\Http\Livewire;
use App\Models\ViewBooks;
use Livewire\WithPagination;
use Livewire\Component;

class Dashboard extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $search = '';


    public function render()
    {
        $query = $this->search;
        $viewBooks = ViewBooks::where(function($query){
            $query->where('isbn','like','%'.$this->search.'%')
            ->orwhere('author','like','%'.$this->search.'%')
            ->orwhere('title','like','%'.$this->search.'%')
            ->orwhere('price','like','%'.$this->search.'%');
        })
        ->orderBy('id','ASC')
        ->paginate(10);
        // ->get();

        return view('livewire.dashboard', [
            'view_books' => $viewBooks,
            'search' => $this->search
        ]);
    }



}
