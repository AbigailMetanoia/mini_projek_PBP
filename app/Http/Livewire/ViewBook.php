<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ViewBooks;
use App\Models\RatingBuku;
use App\Models\KomentarBuku;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreViewBooksRequest;
use App\Http\Requests\UpdateViewBooksRequest;

class ViewBook extends Component
{
    public $bookId, $rating, $book, $reviews, $komentar, $userRating, $noKtpUser, $tlgRating;

    protected $rules = [
        'komentar' => 'max:200',
        'userRating' => 'required',

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
        // $validateData = $this->validate;
        // $this->validate();

        if(RatingBuku::find($this->noKtpUser) === null){
            RatingBuku::create([
                'skor_rating' => $this->userRating,
                'isbn' => $this->book['isbn'],
                'noktp' => $this->noKtpUser,
                'tgl_rating' => $this->tlgRating,
            ]);
            KomentarBuku::create([
                'komentar' => $this->komentar,
                'isbn' => $this->book['isbn'],
                'noktp' => $this->noKtpUser,
            ]);
        }

    }



    public function render()
    {
        $this->book = ViewBooks::find($this->bookId);
        $this->rating = RatingBuku::where('isbn','=',$this->book['isbn'])->avg('skor_rating');
        $this->tlgRating = Carbon::now();

        $this->reviews = KomentarBuku::where('isbn','=',$this->book['isbn'])->get();

        $user = Auth::user();
        $this->noKtpUser = $user->noktp;
        $isNoKtp = RatingBuku::find($this->noKtpUser);


        // if(RatingBuku::find($noKtpUser) != null){
        //     $isNoKtp = RatingBuku::find($noKtpUser);
        // }
        // else{
        //     $isNoKtp = 1;
        // }


        // if(RatingBuku::)

        return view('livewire.view-book', [
            'book' => $this->book,
            'rating' => $this->rating,
            'reviews' => $this->reviews,

            'noKtp' => $this->noKtpUser,
            'isNoKtp' => $isNoKtp,
        ]);

    }
}
