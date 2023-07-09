@extends('layout')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Dashboard</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('team.create') }}" class="btn btn-primary">Create Team</a>
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
