@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Welcome to Library App</h1>
    <p class="text-center">You are logged in as {{ session('user_email') }}</p>
</div>
@endsection
