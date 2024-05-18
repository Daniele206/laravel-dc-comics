@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Comics</h1>
            @if (session('deleted'))
            <div class="my-3 alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
            @endif
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($comics as $comic)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" class="card-img-top object-fit-cover" alt="{{$comic['title']}}" style="height: 440px;">
                    <div class="card-body">
                        <h4 class="card-title d-flex align-items-center justify-content-center" style="height: 60px;">{{$comic['title']}}</h4>
                        <h5 class="card-title d-flex align-items-center justify-content-center" style="height: 60px;">{{$comic['slug']}}</h5>
                        <span>{{$comic['price']}}</span>
                        <br>
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-success mt-3">Info</a>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning mt-3">Modifica</a>
                        <form class="d-inline-block" action="{{ route('comics.destroy', $comic) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="#" class="btn btn-danger mt-3">Cancella</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
