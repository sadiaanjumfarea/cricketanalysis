@extends('homelay')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>A TO Z CRICKET</h1>
    <p>Explore the world of cricket and stay updated with the latest news, scores, and more.</p>
    
    <div class="top-right">
        <h2>Currently Playing Matches</h2>
        @if (!empty($currentlyPlayingMatches) && count($currentlyPlayingMatches) > 0)
            <ul>
                @foreach ($currentlyPlayingMatches as $match)
                    <li>{{ $match->team1 }} vs. {{ $match->team2 }}</li>
                @endforeach
            </ul>
        @else
            <p>No matches are currently playing.</p>
        @endif
        
        <h2>Live Cricket Score</h2>
        @php
            $apiUrl = 'https://api.cricapi.com/v1/matches?apikey=64f08de9-f8e6-4c1d-be48-07db9019b441&offset=0';
            $response = \Illuminate\Support\Facades\Http::get($apiUrl);
            $data = $response->json();
        @endphp

        @if (isset($data['score']))
            <p>{{ $data['score'] }}</p>
        @else
            <p>Unable to fetch live cricket score at the moment.</p>
        @endif
    </div>
    
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</div>
@endsection
