@extends('layouts.app')


@section('content')
<h1>Notes: </h1>
  @if(count($notes) > 0)
    @foreach($notes as $note)
    <a href="/note/{{$note->id}}">
      <div class="card mt-2 bg-grey">
        <h1 class="p-2"> {{$note->title}} </h1>
        <p class="mainText pl-2">{{$note->body}}</p>
        <p class="text-right pr-1"> Last updated at: {{$note->updated_at}}</p>
      </div>
    </a>
    @endforeach
  @else 
    <h1> No Notes Posted </h1>
  @endif
    
@endsection