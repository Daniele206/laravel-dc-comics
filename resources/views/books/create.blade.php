@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-8">
            <h1 class="fw-bold">Nuovo libro</h1>
            <form class="my-4" action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sereie</label>
                    <input name="series" type="text" class="form-control" id="series">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descrizzione</label>
                    <textarea name="description" class="form-control" id="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipologgia</label>
                    <input name="type" type="text" class="form-control" id="type">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link img</label>
                    <input name="thumb" type="text" class="form-control" id="thumb">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prezzo</label>
                    <input name="price" type="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Data di uscita</label>
                    <input name="sale_date" type="date" class="form-control" id="sale_date">
                </div>
                <button class="btn btn-primary" type="submit">Carica dati</button>
                <button class="btn btn-warning" type="reset">Reset</button>
                <a class="btn btn-danger" href="{{ route('books.index') }}">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection
