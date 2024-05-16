@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Info</h1>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="d-flex align-items-center justify-content-center flex-column">
                    <img src="{{ $book->thumb }}" alt="{{$book->title}}" style="height: 300px">
                    <h2 class="fw-bold">{{$book->title}}</h2>
                    <h3>{{$book->series}}</h3>
                    <h4 class="text-capitalize fw-bold">{{$book->type}}</h4>
                    <p>{{$book->description}}</p>
                    <h3>{{$book->price}}</h3>
                    <h4>Data di uscita: {{$book->sale_date}}</h4>
                    <h5 class="pt-3">Scrittori</h5>
                    <p>{{$book->writers}}</p>
                    <h5>Disegnatori</h5>
                    <p>{{$book->artists}}</p>
                    <a href="{{ route('books.index') }}" class="btn btn-success mt-3 mb-5">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
