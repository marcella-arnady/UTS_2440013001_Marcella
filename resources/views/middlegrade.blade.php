@extends('layout.head')

@section('content')
<div class="container my-4">
<div class="card text-white bg-dark mb-4">
  <img class="card-img-top">
  <div class="card-body">
  <h3 class="text-center">Middle Grade</h3>
  <p class="text-center">Books for Beginners</p>
  </div>
</div>

<div class="col-md-4">
            <div class="card h-100" style="max-width: 20rem;">
            <img class="card-img-top" src="{{ $books[0] -> image}}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{ $books[0] -> title}}</h4>
                <p class="card-text">by {{ $books[0] -> author}}</p>
                <a href="/books/{{ $books[0] -> id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        </div>
</div>

        
@endsection