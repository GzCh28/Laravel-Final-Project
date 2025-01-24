<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastsController extends Controller
{
    public function getAllCasts() {
        $casts = DB::table('cast')->get();
 
        return view('casts.getAllPage', ['casts' => $casts]);
    }

    public function getCastbyId($id) {
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('casts.getCastPage', ['cast' => $cast]);
    }

    public function createCast() { 
        return view('casts.createPage');
    }

    public function postCreate(Request $request) {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'biography' => 'required',
        ]);

        DB::table('cast')->insert([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['biography'],
        ]);

        return redirect('/cast');
    }

    public function recreateCast($id) {
        $castData = DB::table('cast')->where('id', $id)->first();
        return view('casts.recreatePage', ['castData' => $castData]);
    }

    public function updateCast($id, Request $request) {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'biography' => 'required',
        ]);

        DB::table('cast')->where('id', $id)->update([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['biography'],
        ]);

        return redirect('/cast');
    }

    public function deleteCast($id) {
        DB::table('cast')->where('id', $id)->delete();

        return redirect('/cast');
    }

    public function deleteAllCasts() {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('cast')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        return redirect('/cast');
    }

}
