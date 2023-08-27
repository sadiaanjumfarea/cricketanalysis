@extends('layout')

@section('title', 'Match Details')

@section('content')
<style>
    .match-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px 0;
        background-color: #f5f5f5;
    }
</style>

<div class="container">
    <h1>Match Details</h1>

    @foreach ($data['data'] as $match)
        <div class="match-container">
            <h2>{{ $match['name'] }}</h2>
            <p>Status: {{ $match['status'] }}</p>
            <p>Venue: {{ $match['venue'] }}</p>
            <p>Date: {{ $match['date'] }}</p>
            <p>Time: {{ $match['dateTimeGMT'] }}</p>

            <h3>Teams</h3>
            <ul>
                @foreach ($match['teams'] as $team)
                    <li>{{ $team }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach

</div>
@endsection
