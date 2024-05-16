@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Comics</h1>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($books as $book)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{$book['thumb']}}" class="card-img-top object-fit-cover" alt="{{$book['title']}}" style="height: 440px;">
                    <div class="card-body">
                        <h4 class="card-title d-flex align-items-center justify-content-center" style="height: 60px;">{{$book['title']}}</h4>
                        <span>{{$book['price']}}</span>
                        <br>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-success mt-3">More Info</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
