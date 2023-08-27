@extends('layout')

@section('title', 'Upcoming Match Details')

@section('content')
<style>
    .match-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .match-container {
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #f5f5f5;
    }
</style>

<div class="container">
    <h1>Upcoming Match Details</h1>

    <div class="match-grid">
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

                @if (isset($match['teamInfo']))
                    <h3>Team Info</h3>
                    <ul>
                        @foreach ($match['teamInfo'] as $teamInfo)
                            <li>{{ $teamInfo['name'] }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>

</div>
@endsection
