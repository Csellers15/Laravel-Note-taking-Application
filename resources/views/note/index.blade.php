@extends('layouts.app')


@section('content')
<h1>Notes: </h1>
  @if(count($notes) > 0)
    @foreach($notes as $note)
    <a href="/note/{{$note->id}}">
      <div class="card bg-secondary mt-2">
        <h1> {{$note->title}} </h1>
        <p class="mainText">{{$note->body}}</p>
      </div>
    </a>
    @endforeach
  @else 
    <h1> No Notes Posted </h1>
  @endif
    
@endsection