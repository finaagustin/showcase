<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::with('kategori')->orderBy('id', 'desc')->paginate(10);
        return view('film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('film.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $film = new Film();
        $film->judul = $request->judul;
        $film->j_episode = $request->j_episode;
        $film->referensi = $request->referensi;
        $film->sutradara = $request->sutradara;
        $film->tanggal = $request->tanggal;
        $film->rating = $request->rating;
        $film->deskripsi = $request->deskripsi;
        $film->id_kategori = $request->id_kategori;
        $film->image = $request->image;
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $film['image'] = "$profileImage";
        }
        $film->save();
        return redirect()->route('film.index')->with(['message' => 'Film berhasil dibuat!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        $kategori = Kategori::all();
        return view('film.edit', compact('film', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);
        $film->judul = $request->judul;
        $film->j_episode = $request->j_episode;
        $film->referensi = $request->referensi;
        $film->sutradara = $request->sutradara;
        $film->tanggal = $request->tanggal;
        $film->rating = $request->rating;
        $film->deskripsi = $request->deskripsi;
        $film->id_kategori = $request->id_kategori;
        $film->image = $request->image;
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $film['image'] = "$profileImage";
        } else {
            unset($film['image']);
        }
        $film->save();
        return redirect()->route('film.index')->with(['message' => 'Film berhasil diedit!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id)->delete();
        return redirect()->route('film.index')->with(['message' => 'Film berhasil dihapus!']);
    }
}
