<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function create()
    {
        return view('genre.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],
        [
            'name.required' => "Nama Genre Harus Di isi",
        ]);

        DB::table('genre')->insert([
            'name' => $request['name'],
        ]);
        return redirect('/genre');
    }

    public function index()
    {
        $genre = DB::table('genre')->get();
        // dd($genre);
        return view('genre.tampil', ['genre' => $genre]);
    }

    public function edit($id)
    {
        $genre = DB::table('genre')->find($id);

        return view('genre.edit', ['genre' => $genre]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],
        [
            'name.required' => "Nama Genre Harus Di isi",
        ]);

        DB::table('genre')
              ->where('id', $id)
              ->update(
                [
                    'name' => $request['name']
                ]
            );
            return redirect('/genre');
    }
    public function destroy($id)
    {
        DB::table('genre')->where('id', '=', $id)->delete();

        return redirect('/genre');
    }
}
