@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">
        <h2>Create Comic</h2>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" required>

            <label for="description">Description:</label>
            <textarea name="description" required></textarea>

            <label for="issue_number">Issue Number:</label>
            <input type="number" name="issue_number" required>

            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" required>

            <button type="submit">Create</button>
        </form>
    </div>
@endsection
