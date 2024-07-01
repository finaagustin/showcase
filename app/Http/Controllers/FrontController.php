<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $bagus1 = Film::orderByDesc('rating')->first();
        $bagus2 = Film::orderByDesc('rating')->skip(1)->first();
        $bagus3 = Film::orderByDesc('rating')->skip(2)->first();
        $film = Film::with('kategori')->orderBy('id', 'desc')->paginate(12);
        $horror = Film::where('id_kategori', 1)->paginate(12);
        $animasi = Film::where('id_kategori', 2)->paginate(12);
        $drama = Film::where('id_kategori', 3)->paginate(12);
        $fantasi = Film::where('id_kategori', 4)->paginate(12);
        $romansa = Film::where('id_kategori', 5)->paginate(12);
        $komedi = Film::where('id_kategori', 6)->paginate(12);
        $aksi = Film::where('id_kategori', 7)->paginate(12);
        return view('front.index', compact('film', 'bagus1', 'bagus2', 'bagus3', 'horror', 'animasi', 'drama', 'fantasi', 'romansa', 'komedi', 'aksi'));
    }

    public function getCarouselData()
    {
        $data = Film::paginate(12); // Ambil 20 data dari model Anda

        return view('front.coba', ['data' => $data]);
    }

    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('front.show', compact('film'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $film = Film::when($search, function ($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%');
        })->paginate(12);

        return view('front.search', compact('film'));
    }
}
