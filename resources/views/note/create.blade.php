@extends('layouts.app')

@section('content')
    <style>
        .uper {
          margin-top: 40px;
        }
    </style>

    <div class="card uper">
      <div class="card-header">
        Add Item
      </div>
      <div class="card-body">
          <form method="post" action="{{ route('note.store') }}">
              <div class="form-group">
                  @csrf
                  <label for="title">Note Title :</label>
                  <input type="text" class="form-control" name="title"/>
              </div>
              <div class="form-group">
                  <label for="body">Note text :</label>
                  <input type="text" class="form-control" name="body"/>
              </div>
              <button type="submit" class="btn btn-primary">Create Item</button>
          </form>
      </div>
    </div>
@endsection