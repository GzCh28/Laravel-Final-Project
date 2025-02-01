<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __construct() {
        $this->middleware("auth")->except(['index']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::get();
        return view('genre.index', ['genres' => $genres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.createPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $genre = new Genre();
        $genre->name = $request['name'];
        $genre->save();

        return redirect('/genre');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genre::find($id);
        return view('genre.editPage', ['genre' => $genre]);
    }

    public function show(string $id)
    {
        $genre = Genre::find($id);
        return view('genre.showPage', ['genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $genre = Genre::find($id);
        $genre->name = $request['name'];
        $genre->save();

        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect('/genre');
    }
}
