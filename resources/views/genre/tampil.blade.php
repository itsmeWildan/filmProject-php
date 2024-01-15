@extends('layouts.master')
@section('title')
    Page View Genre Film
@endsection
@section('content')

    <a href="/genre/create" class="btn btn-primary btn-sm my-2">Add Genre Film</a>

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Genre Film</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @forelse ($genre as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item -> name}}</td>
            <td>
                <form action="/genre/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/genre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>Blank Film Genre Data</td>
        </tr>
    @endforelse
  </tbody>
</table>
@endsection

