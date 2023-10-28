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
    public $bookId, $rating, $book, $ratings, $reviews, $komentar, $userRating, $noKtpUser, $tlgRating, $avgRating;

    public $test;

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
        $verivedData = $this->validate();
        $ratingUser = RatingBuku::find($this->noKtpUser);
        if((RatingBuku::find($this->noKtpUser) === null)){
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
            // $this->test = RatingBuku::whereNot('isbn','=',$this->book['isbn'])->whereNot('noktp','=','$this->noKtpUser')->get();
            $this->test = 1;
        }
        elseif((RatingBuku::where('noktp','=',$this->noKtpUser)->where('isbn','=',$this->book['isbn'])->get()->isEmpty())){ // sampe sinin pusing
            $this->test = 2;
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
        else{
            KomentarBuku::create([
                'komentar' => $this->komentar,
                'isbn' => $this->book['isbn'],
                'noktp' => $this->noKtpUser,
            ]);
            $this->test = 3;

        }

    }



    public function render()
    {
        $this->book = ViewBooks::find($this->bookId);
        $rating = RatingBuku::where('isbn','=',$this->book['isbn']);
        $this->avgRating = $rating->avg('skor_rating');
        $this->tlgRating = Carbon::now();
        $this->ratings = $rating->get();

        $this->reviews = KomentarBuku::where('isbn','=',$this->book['isbn'])->get();

        $user = Auth::user();
        $this->noKtpUser = $user->noktp;
        $isNoKtp = RatingBuku::find($this->noKtpUser);
        $ada = RatingBuku::where('noktp','=',$this->noKtpUser)->where('isbn','=',$this->book['isbn'])->get()->isNotEmpty();


        // if(RatingBuku::find($noKtpUser) != null){
        //     $isNoKtp = RatingBuku::find($noKtpUser);
        // }
        // else{
        //     $isNoKtp = 1;
        // }


        // if(RatingBuku::)

        return view('livewire.view-book', [
            'book' => $this->book,
            'avgRating' => $this->avgRating,

            'ratings' => $this->ratings,
            'reviews' => $this->reviews,



            'noKtp' => $this->noKtpUser,
            'isNoKtp' => $isNoKtp,
            'ada' => $ada,
            'test' => $this->test,
        ]);

    }
}
