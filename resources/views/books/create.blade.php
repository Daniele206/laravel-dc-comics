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
                    <input name="title" type="text" class="form-control" id="title" value="Comics test">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sereie</label>
                    <input name="series" type="text" class="form-control" id="series" value="Comics test serie">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descrizzione</label>
                    <textarea name="description" class="form-control" id="description" value=""></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipologgia</label>
                    <input name="type" type="text" class="form-control" id="type" value="Comics test tipologgia">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link img</label>
                    <input name="thumb" type="text" class="form-control" id="thumb" value="https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prezzo</label>
                    <input name="price" type="price" class="form-control" id="price" value="$19.99">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Data di uscita</label>
                    <input name="sale_date" type="date" class="form-control" id="sale_date" value="">
                </div>
                <button class="btn btn-primary" type="submit">Carica dati</button>
                <button class="btn btn-warning" type="reset">Reset</button>
                <a class="btn btn-danger" href="{{ route('books.index') }}">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection
