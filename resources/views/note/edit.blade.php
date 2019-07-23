@extends('layouts.app')

@section('content')
    <style>
        .uper {
          margin-top: 40px;
        }
    </style>

    <div class="card uper">
      <div class="card-body">
          <form method="POST" action="{{ route('note.update', $note->id) }}">
              @method('PATCH') 
              @csrf
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $note->title }}" />
              </div>
              <div class="form-group">
                <label for="body">Note Body :</label>
                <input type="text" class="form-control" name="body" value="{{ $note->body }}" />
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
      </div>
    </div>
@endsection