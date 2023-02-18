<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCotroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.admin.accueil-admin');
    }

}
