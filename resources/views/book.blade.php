@extends('layout.head')

@section('content')
<div class="container my-5">
            <div class="card text-white bg-dark mb-4">
                <img class="card-img-top">
                <div class="card-body">
                    <h3 class="text-center">Book Detail</h3>
                    <p class="text-center">Get to know more about the book</p>
                </div>
            </div>
        </div>

        <div class="container my-5">
<h1 class="mb-5">{{ $book->title }}</h1>
<p class="mb-5">{{ $book->synopsis }}</p>
<br>
<img src="{{ $book->image }}">
<br>
<p>Author: {{ $book->author }}</p>
<p>Year: {{ $book->year }}</p>


<a href="/">Back to home</a>
</div>
@endsection