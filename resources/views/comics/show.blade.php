@extends('layouts.main')
@section('page-content')
    <div class="container">
        <a href="{{ route('comics.index') }}">torna all'Homepage</a>
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
    </div>
@endsection
