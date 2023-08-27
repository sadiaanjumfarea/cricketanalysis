@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="mb-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-12 text-end">
            <a href="{{ route('team.create') }}" class="btn btn-primary">Create Team</a>
            <a href="{{ route('cricketers.by.innings') }}" class="btn btn-primary">See Ranking</a>
            <a href="{{ route('female.players') }}" class="btn btn-primary">See Female Players</a>
            <a href="{{ route('male.players') }}" class="btn btn-primary">See Male Players</a>
            <a href="{{ route('match') }}" class="btn btn-primary">Current Matches</a>
        </div>
    </div>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Innings</th>
                <th>Run Rate</th>
                <th>Matches Played</th>
                <th>Other Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cricketers as $cricketer)
            <tr>
                <td>{{ $cricketer->name }}</td>
                <td>{{ $cricketer->innings }}</td>
                <td>{{ $cricketer->run_rate }}</td>
                <td>{{ $cricketer->matches_played }}</td>
                <td>{{ $cricketer->other_details }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
