<?php

namespace App\Http\Livewire;
use App\Models\Carts;

use Livewire\Component;
use App\Models\ViewBooks;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $books;

    public function addToCart($bookId){
        $book = ViewBooks::find($bookId);
        $this->books = $book;
        $cart = [
            // 'isbn' => $this->books->isbn,
            // 'judul' => $this->books->judul,
            'isbn' => 'A2',
            'judul' => 'Beban Hidup',
        ];
        Carts::create($cart);

        return redirect('/keranjang');
    }

    public function render()
    {
        $viewBooks = ViewBooks::where(function($quary){
            $quary->where('isbn','like','%'.$this->search.'%')
            ->orWhere('judul','like','%'.$this->search.'%')
            ->orWhere('idkategori','like','%'.$this->search.'%')
            ->orWhere('pengarang','like','%'.$this->search.'%')
            ->orWhere('penerbit','like','%'.$this->search.'%')
            ->orWhere('kota_terbit','like','%'.$this->search.'%')
            ->orWhere('editor','like','%'.$this->search.'%');
        })
        ->orderBy('id','ASC')
        ->paginate(10);
        // ->get();
        return view('livewire.dashboard', [
            'view_books' => $viewBooks,
            'books' => $this->books,
            // 'isbn' => $this->books['isbn'],
        ]);
    }



}
