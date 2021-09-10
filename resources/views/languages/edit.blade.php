@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Language
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('languages.update', $language->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" value="{{ $language->name }}" />
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" class="form-control" name="description" value="{{ $language->description }}"/>
        </div>
        <button type="submit" class="btn btn-primary mr-3">Update</button>
        <a href="{{ route('languages.index') }}" class="btn btn-danger">Cancel</a>
      </form>
  </div>
</div>
@endsection