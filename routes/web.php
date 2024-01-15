<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/master', function () {
    return view('layouts.master');
});

//CRUD FILM
// Route ke halaman create film
Route::get('/film/create', [FilmController::class, 'create']);
// Route untuk tambah datatabase di table film
// Route::post('/film',[FilmController::class, 'store']);
Route::resource('film',FilmController::class);

//CRUD GENRE
// Route ke halaman create genre
Route::get('/genre/create', [GenreController::class, 'create']);
// Route untuk tambah datatabase di table genre
Route::post('/genre',[GenreController::class, 'store']);
// Route untuk mengarah ke halaman tampil semua data di table genre
Route::get('/genre',[GenreController::class, 'index']);

// Update Data Genre
// Route ke form genre
Route::get('/genre/{id}/edit',[GenreController::class, 'edit']);
// Route untuk edit data berdasarkan id genre
Route::put('/genre/{id}',[GenreController::class, 'update']);

// Delete Data
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);