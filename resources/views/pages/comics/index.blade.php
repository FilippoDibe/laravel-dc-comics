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
            </li>
        @endforeach
    </ul>
@endsection
