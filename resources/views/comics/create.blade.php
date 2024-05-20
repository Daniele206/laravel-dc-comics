@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-8">
            <h1 class="fw-bold">Nuovo libro</h1>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="my-4" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
                    @error('title')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sereie</label>
                    <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series" value="{{ old('series') }}">
                    @error('series')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descrizzione</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
                    @error('description')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipologgia</label>
                    <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type" value="{{ old('type') }}">
                    @error('type')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link img</label>
                    <input name="thumb" type="text" class="form-control" id="thumb" value="{{ old('thumb') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prezzo</label>
                    <input name="price" type="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}">
                    @error('price')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Data di uscita</label>
                    <input name="sale_date" type="date" class="form-control" id="sale_date" value="{{ old('sale_date') }}">
                </div>
                <button class="btn btn-primary" type="submit">Carica dati</button>
                <button class="btn btn-warning" type="reset">Reset</button>
                <a class="btn btn-danger" href="{{ route('comics.index') }}">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection
