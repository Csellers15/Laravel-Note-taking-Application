@extends('layouts.app') 


@section('content')
  <a class="btn btn-primary m-3" href="/"> Back </a>
  <div class="jumbotron">
      <h1> {{$note->title}} </h1>
      <p class="mainText">{{$note->body}}</p>
      <p class="secondaryText">Created on: <br> {{$note->created_at}}</p>

        <a href="/note/{{$note->id}}/edit"> <button type="button" class="btn btn-primary btn-block">Edit Note</button></a>
        <form action="{{ route('note.destroy', $note->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger btn-block" type="submit">Delete Note</button>
        </form>

  </div>
@endsection
