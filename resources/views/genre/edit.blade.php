@extends('layouts.master')
@section('title')
    Page Edit Genre Film
@endsection
@section('content')
    <form action="/genre/{{$genre->id}}" method="POST">
        @csrf
        @method('put')
        
         <div class="form-group">
          <label>Genre Film</label>
           <input type="text" name="name" value="{{$genre->name}}" class="form-control"  placeholder="Add Title Film">
         </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
              </form>
@endsection