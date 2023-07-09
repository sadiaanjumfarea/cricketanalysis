@extends('layout')
@section('title', 'Create Team')
@section('content')
<div class="container">
    <h1>Create Team</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('team.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="team_name" class="form-label">Team Name</label>
            <input type="text" name="team_name" id="team_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cricketers" class="form-label">Select 11 Cricketers</label>
            <select name="cricketers[]" id="cricketers" class="form-control" multiple required>
                @foreach ($cricketers as $cricketer)
                    <option value="{{ $cricketer->id }}">{{ $cricketer->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Team</button>
    </form>

    <div class="mt-4">
        <a href="{{ route('team.list') }}" class="btn btn-secondary">See Other Teams</a>
    </div>
</div>
@endsection
