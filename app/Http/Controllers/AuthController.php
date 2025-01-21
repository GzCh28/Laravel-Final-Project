<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPage(){
        return view('page.register');
    }

    public function welcomePage(Request $request) {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');

        return view('page.welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}
