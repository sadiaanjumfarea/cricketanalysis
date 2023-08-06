@extends('layout')

@section('title', 'Upcoming Matches')

@section('content')
<div class="container">
    <h1>Upcoming Matches (Fixtures)</h1>

    @if($upcomingMatches->count() > 0)
        <ul>
            @foreach($upcomingMatches as $match)
                <li>{{ $match->team1 }} vs. {{ $match->team2 }} ({{ $match->match_date->format('M d, Y') }})</li>
            @endforeach
        </ul>
    @else
        <p>No upcoming matches found.</p>
    @endif
</div>
@endsection
