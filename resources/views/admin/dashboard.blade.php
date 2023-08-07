@extends('layout')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>

        <form action="{{ route('cricketers.destroy', ['id' => $cricketer->id ?? 0]) }}" method="POST">
            @csrf
            @method('DELETE')
            <label for="cricketer_id">Enter Cricketer ID to delete:</label>
            <input type="text" name="cricketer_id" id="cricketer_id">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        
        <h2>Cricketers List</h2>
        <ul>
            
        </ul>
    </div>
@endsection
