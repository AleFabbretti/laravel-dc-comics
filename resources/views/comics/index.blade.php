@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h2>Lista Fumetti</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di Vendita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->thumb }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
