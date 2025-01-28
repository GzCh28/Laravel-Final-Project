<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;
use Illuminate\Support\Facades\File;

class FilmController extends Controller
{

    public function __construct() {
        $this->middleware("auth")->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::get();
        return view('film.indexPage', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::get();
        return view('film.createPage', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'release' => 'required|numeric',
            'poster' => 'required|image|mimes:jpeg, png, jpg',
            'genre_id' => 'required',
        ]);

        $film = new Film;

        $fileName = 'Poster-' . time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('poster_folder'), $fileName);

        $film->title = $request['title'];
        $film->summary = $request['summary'];
        $film->release_year = $request['release'];
        $film->genre_id = $request['genre_id'];
        $film->poster = $fileName;
        $film->save();
 
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return view('film.showPage', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        $genres = Genre::get();
        return view('film.editingPage', ['film' => $film, 'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'release' => 'required|numeric',
            'poster' => 'image|mimes:jpeg, png, jpg',
            'genre_id' => 'required',
        ]);

        $film = Film::find($id);

        if ($request->has('poster')) {
            $fileNewName = 'Poster-' . time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('poster_folder'), $fileNewName);

            File::delete(public_path('poster_folder/' . $film->poster));
            $film->poster = $fileNewName;
        }

        $film->title = $request['title'];
        $film->summary = $request['summary'];
        $film->release_year = $request['release'];
        $film->genre_id = $request['genre_id'];

        $film->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Film::find($id)->delete();
       return redirect('/film');
    }
}
