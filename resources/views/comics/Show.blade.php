@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Info</h1>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="d-flex align-items-center justify-content-center flex-column">
                    <img src="{{ $comic->thumb }}" alt="{{$comic->title}}" style="height: 300px">
                    <h2 class="fw-bold">{{$comic->title}}</h2>
                    <h3>{{$comic->series}}</h3>
                    <h4 class="text-capitalize fw-bold">{{$comic->type}}</h4>
                    <p>{{$comic->description}}</p>
                    <h3>{{$comic->price}}</h3>
                    <h4>Data di uscita: {{$comic->sale_date}}</h4>
                    <h5 class="pt-3">Scrittori</h5>
                    <p>{{$comic->writers}}</p>
                    <h5>Disegnatori</h5>
                    <p>{{$comic->artists}}</p>
                    <a href="{{ route('comics.index') }}" class="btn btn-success mt-3 mb-5">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
