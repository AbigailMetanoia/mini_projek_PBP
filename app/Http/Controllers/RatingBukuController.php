<?php

namespace App\Http\Controllers;
use App\Models\RatingBuku;
use Illuminate\Http\Request;

class RatingBukuController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = auth()->user();

        $request->validate([
            'skor_rating' => 'required|integer|min:1|max:5',
            'komentar' => 'required',
        ]);

        $reviews = new RatingBuku([
            'id' => $user->id,
            'isbn' => $id,
            'skor_rating' => $request->skor_rating,
            'komentar' => $request->komentar,
        ]);
        $reviews->save();

        return redirect()->back()->with('success', 'Rating dan komentar Anda telah disimpan.');
    }
}
