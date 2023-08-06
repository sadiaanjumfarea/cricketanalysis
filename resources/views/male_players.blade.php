@extends('layout')

@section('title', 'male Players')

@section('content')
<div class="container">
    <h1>male Players List</h1>

    <table class="table">
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
            @foreach ($malePlayers as $pl)
            <tr>
                <td>{{ $pl->name }}</td>
                <td>{{ $pl->innings }}</td>
                <td>{{ $pl->run_rate }}</td>
                <td>{{ $pl->matches_played }}</td>
                <td>{{ $pl->other_details }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
