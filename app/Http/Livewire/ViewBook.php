<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ViewBooks;
use App\Models\RatingBuku;
use App\Http\Requests\StoreViewBooksRequest;
use App\Http\Requests\UpdateViewBooksRequest;

class ViewBook extends Component
{
    public $bookId, $rating, $book;

    protected $rules = [
        'komentar' => 'max:200',
    ];

    public function index()
    {
        $viewBooks = ViewBooks::all();

        return view('livewire.dashboard', ['view_books' => $viewBooks]);
    }

    public function mount($id) {
        $this->bookId = $id;
        $book = ViewBooks::all();

        // $this->urlID = intval($existingUser->id);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreViewBooksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ViewBooks $viewBooks)
    {
        return view('livewire.dashboard', ['view_books' => $viewBooks]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ViewBooks $viewBooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateViewBooksRequest $request, ViewBooks $viewBooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ViewBooks $viewBooks)
    {
        //
    }

    public function search(ViewBooks $request)
    {
        $query = $request->input('query');

        $results = ViewBooks::where('isbn', 'like', '%' . $query . '%')
                    ->orWhere('title', 'like', '%' . $query . '%')
                    ->orWhere('author', 'like', '%' . $query . '%')
                    ->get();
        return response()->json($results);
    }

    public function review(){
        $validateData = $this->validate;
        Review::create([
            'isbn' =>
        ]);
    }

    public function render()
    {
        $this->book = ViewBooks::find($this->bookId);
        $this->rating = RatingBuku::where('isbn','=',$this->book['isbn'])->get() ;
        return view('livewire.view-book', [
            'book' => $this->book,
            // 'isbn' => $this->book->isbn,
            'reviews' => $this->rating,
        ]);

        // $book = ViewBooks::find($this->book);

        // return view('livewire.detail_books', ['book' => $this->book]);

    }
}
