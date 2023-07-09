@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>A TO Z CRICKET</h1>
    <p>Explore the world of cricket and stay updated with the latest news, scores, and more.</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</div>
@endsection
