@extends('layout')
@section('title', 'Other Teams')
@section('content')
<div class="container">
    <h1>Other Teams</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>User Id</th>
                <th>Members</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->user_id }}</td>
                <td>
                    <ul>
                        @foreach ($team->cricketers as $cricketer)
                            <li>{{ $cricketer->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>@php
                
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection
