@extends('layouts.main-layout')

@section('head')
    <title>Edit Comic</title>
@endsection

@section('content')
    <h2>Edit Comic</h2>
    <form action="{{ route('comic.edit', $comic->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}" required>

        <label for="description">Description:</label>
        <textarea name="description" required>{{ $comic->description }}</textarea>

        <label for="price">Price:</label>
        <input type="number" step="0.01" name="price" value="{{ $comic->price }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
