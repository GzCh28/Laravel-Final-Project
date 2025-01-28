<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profile = Profile::where('user_id', $id)->first();
        $user = User::find($id);
        return view('dashboard.accountPage', ['profile' => $profile, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:15'],
            'age' => ['required', 'numeric'],
            'bio' => ['required', 'string', 'max:1000'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $profile = Profile::find($id);
        $profile->update([
            'age' => $request->age,
            'bio' => $request->bio,
        ]);

        $user = User::where('id', $profile->user_id)->first();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
