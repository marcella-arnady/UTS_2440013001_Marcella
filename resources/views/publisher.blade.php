
@extends('layout.head')

@section('content')


<div class="container mt-3 mb-5">
    <div class="row">
        
    @foreach ($publishers as $publisher)
    <div class="col-md-4">
    <div class="card h-100" style="max-width: 20rem">
    <img class="card-img-top" src="{{ $publisher -> image }}" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">{{ $publisher -> name}}</h4>
        <p class="card-text">{{ $publisher -> address}}</p>
        <a href="/publishers/{{ $publisher -> id }}" class="btn btn-primary">Detail</a>
    </div>
    </div>
    </div>
    @endforeach

</div>
</div>
@endsection