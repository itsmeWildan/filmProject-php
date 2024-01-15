@extends('layouts.master')
@section('title')
    Page Add Genre Film
@endsection
@section('content')
    <form method="POST" enctype="multipart/form-data">
        @csrf
         <div class="form-group">
          <label>Genre Film</label>
           <input type="text" name="name" class="form-control"  placeholder="Add Title Film">
         </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
              </form>
@endsection