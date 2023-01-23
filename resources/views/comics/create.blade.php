@extends('layouts.main')

@section('page-content')
    <h1>Inserisci Nuovo Fumetto</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label @error('title') is-invalid @enderror">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="50"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" maxlength="50"
                    value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label @error('series') is-invalid @enderror">Serie</label>
                <input type="text" class="form-control" id="thumb" name="series" maxlength="50"
                    value="{{ old('series') }}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Giorno di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" maxlength="50"
                    value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label @error('type') is-invalid @enderror">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" maxlength="50"
                    value="{{ old('type') }}">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label @error('price') is-invalid @enderror">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" maxlength="50"
                    value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label @error('description') is-invalid @enderror">
                    {{ old('description') }}</label>
                <input type="text" class="form-control" id="description" name="description" maxlength="1000">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
