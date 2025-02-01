<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Reviews;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    public function create($id) {
        $film = Film::find($id);
        return view('reviews.createPage', ['film' => $film]);
    }


    public function store(Request $request, $id) {
        $request->validate([
            'rate' => 'required',
            'content' => 'required|max: 1500',
        ]);

        $review = new Reviews;
        $review->point = $request['rate'];
        $review->content = $request['content'];
        $review->user_id = Auth::user()->id;
        $review->film_id = $id;

        $review->save();

        return redirect('/film/' . $id);

    }

    public function delete($id, $review) {
        $review = Reviews::find($review);
        $review->delete();
        return redirect('/film/' . $id);
    }
}
