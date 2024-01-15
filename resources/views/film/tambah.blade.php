@extends('layouts.master')
@section('title')
    Page Add Film
@endsection
@section('content')
    <form action="/film" method="POST" enctype="multipart/form-data">
        @csrf
         <div class="form-group">
          <label>Title Film</label>
           <input type="text" name="title" class="form-control"  placeholder="Add Title Film">
         </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         <div class="form-group">
          <label>Summary</label>
          <textarea name="summary" class="form-control" cols="70" rows="10" placeholder="Add Summary Film"></textarea>
         </div>
            @error('summary')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         <div class="form-group">
          <label>Year</label>
          <input name="year" class="form-control" cols="30" rows="10" placeholder="Add Year"></input>
         </div>
            @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         <div class="form-group">
          <label>Poster</label>
          <input type="file" name="poster" class="form-control"  placeholder="Add Image Film">
         </div>
            @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div class="form-group">
           <label>Genre</label>
           <select name="genre_id" class="form-control" id="">
            <option value="">---Pilih Genre---</option>
            @forelse ($genre as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @empty
                <option value="">Genre Film Belum Ada</option>
            @endforelse
           </select>
         </div>
            @error('genre_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
              </form>
@endsection