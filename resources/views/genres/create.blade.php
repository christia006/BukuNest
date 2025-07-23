@extends('layouts.app')

@section('content')
<h1>Add New Genre</h1>
<form action="{{ route('admin.genres.store') }}" method="POST">
  @csrf
  <p>Name: <input type="text" name="name"></p>
  <p>Description: <textarea name="description"></textarea></p>
  <button type="submit">Save</button>
</form>
@endsection
