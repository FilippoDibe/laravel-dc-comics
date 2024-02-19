@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <h1>Comics:</h1>
    <a href="{{ route('comic.create') }}">CREATE</a>
    <br><br>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comic.show', $comic->id) }}">
                    {{ $comic->title }}
                </a>
                <a href="{{ route('comic.edit', $comic->id) }}">Edit</a>
                <form action="{{ route('comic.destroy', $comic->id) }}" method="post" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="delete-button">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
