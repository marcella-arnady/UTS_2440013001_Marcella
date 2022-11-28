@extends('layout.head')

@section('content')


<!--  -->
	  <section class="py-0">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://img.freepik.com/free-vector/focused-tiny-people-reading-books_74855-5836.jpg?w=2000" 
                    alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Welcome to Happy Book Store!</h1>
                        <div class="fs-5 mb-5">
                            <span class="text">Your go-to bookstore</span>
                   
                        </div>
                        <p class="lead">
                        "Books are a uniquely portable magic." -Stephen King
                        </p>
                      
                    </div>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="card text-white bg-dark mb-4">
                <img class="card-img-top">
                <div class="card-body">
                    <h3 class="text-center">Book List</h3>
                    <p class="text-center">Find your wishlist here</p>
                </div>
            </div>
        </div>

       



<div class="container mt-3 mb-5">

<div class="card-deck">
<div class="row">
        @foreach ($books as $book)
        <div class="col-md-4">
            <div class="card h-100" style="max-width: 20rem;">
            <img class="card-img-top" src="{{ $book -> image}}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{ $book -> title}}</h4>
                <p class="card-text">by {{ $book -> author}}</p>
                <a href="/books/{{ $book -> id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        </div>
        @endforeach
        </div>
        </div>
        </div>


<!-- <div class="container mt-3 mb-4">
    <div class="row">
        <div class="col-md-4">
        <div class="card" style="max-width: 15rem;">
  <img class="card-img-top" src="data:image/png;base64,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" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Mizan Publishing</a></h4>
    <p class="card-text">Jl. Jakarta Selatan</p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
</div>

        <div class="col-md-4">
        <div class="card" style="max-width: 15rem;">
  <img class="card-img-top" src="https://pbs.twimg.com/media/CEtdkknVAAAyd1L.png:large" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Gramedia</a></h4>
    <p class="card-text">Jl. Palmerah</p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
</div>


        <div class="col-md-4">
        <div class="card" style="max-width: 15rem;">
  <img class="card-img-top" src="https://d1dyndsnc54cq8.cloudfront.net/assets/sns-large-logo.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Simon & Schuster</a></h4>
    <p class="card-text">New York rd.</p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
</div>
</div>
</div> -->
@endsection
