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
                    <th scope="col">Azioni</th>
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
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">GO!</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('comics.create') }}" class="btn btn-secondary">Inserisci nuovo fumetto</a>
    </div>
@endsection
