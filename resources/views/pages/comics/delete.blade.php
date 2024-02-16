@extends('layouts.app')

@section('content')
    <h2>Delete Comic</h2>
    <p>Are you sure you want to delete this comic?</p>
    <form action="{{ route('pages.comics.destroy', $comic->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('pages.comics.index') }}">Cancel</a>
@endsection
