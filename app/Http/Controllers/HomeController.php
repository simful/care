<?php

namespace App\Http\Controllers;

use App\User as User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('home', compact('users'));
    }

    public function profile()
    {
        $user = Auth::user();

        return view('users.show', compact('user'));
    }
}
