<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::all();
        return view('film.tampil', ['film'=>$film]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('film.tambah', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'summary' => 'required',
        'year' => 'required',
        'poster' => 'required|mimes:png,jpg,jpeg|max:2048',
        'genre_id' => 'required',
        ]);

        // konfersi atau ubah nama poster
         $posterName = time().'.'.$request->poster->extension();

        //  file gambar masuk ke folder public/poster
        $request->poster->move(public_path('poster'), $posterName);

        //  insert data ke database
        $film = new Film();
 
        $film->title = $request->title;
        $film->summary = $request->summary;
        $film->year = $request->year;
        $film->poster = $posterName;
        $film->genre_id = $request->genre_id;
 
        $film->save();
 
        // kembali kehalamn /film
        return redirect('/film');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
