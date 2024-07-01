<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Kategori;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $film = Film::count();
        $kategori = Kategori::count();
        return view('admin.dashboard', compact('film', 'kategori'));
    }

    public function dashboard()
    {
        $film = Film::count();
        $kategori = Kategori::count();
        return view('admin.dashboard', compact('film', 'kategori'));
    }
}
