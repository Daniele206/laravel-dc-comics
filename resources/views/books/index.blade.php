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
                        <h5 class="d-flex align-items-center justify-content-center" style="height: 40px;">{{$book['series']}}</h5>
                        <p class="card-text" style="height: 100px;
                        width:100%;
                        overflow: auto;">{{$book['description']}}</p>
                        <span>{{$book['price']}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
