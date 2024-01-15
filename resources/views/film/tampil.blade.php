@extends('layouts.master')
@section('title')
    Page View Film
@endsection
@section('content')
    <a href="/film/create " class="btn btn-primary my-3">Add</a>

    <div class="row">
        @forelse ($film as $item)
                 <div class="card">
            <img src="{{asset('/poster/'. $item->poster)}}" class="card-img-top" alt="Card image cap">
            <div class="card-body">
            <h1>{{$item->title}}</h1>
            <p class="card-text">{{$item->summary}}</p>
            <a href="#" class="btn btn-primary">Read More</a>
         </div>
        </div>
        </div>
        @empty
            <h1>Empty Film</h1>
        @endforelse
        <div class="col-4">
       

    </div>
@endsection