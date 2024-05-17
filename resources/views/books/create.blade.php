@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Nuovo libro</h1>
            <form action="{{ route('books.store') }}" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sereie</label>
                    <input type="text" class="form-control" id="series">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descrizzione</label>
                    <input type="text" class="form-control" id="description">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipologgia</label>
                    <input type="text" class="form-control" id="type">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link img</label>
                    <input type="text" class="form-control" id="thumb">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prezzo</label>
                    <input type="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Data di uscita</label>
                    <input type="date" class="form-control" id="sale_date">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Scrittori</label>
                    <input type="text" class="form-control" id="artists">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Disegantori</label>
                    <input type="text" class="form-control" id="writers">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
