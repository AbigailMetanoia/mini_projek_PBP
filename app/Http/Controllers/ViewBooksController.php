<?php

namespace App\Http\Controllers;

use App\Models\ViewBooks;
use App\Http\Requests\StoreViewBooksRequest;
use App\Http\Requests\UpdateViewBooksRequest;

class ViewBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewBooks = ViewBooks::all();

        return view('livewire.dashboard', ['view_books' => $viewBooks]);
    }

    public function detailsBook($id)
    {
        $book = ViewBooks::find($id);

        return view('livewire.detail_books', ['view_books' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     */
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
}
