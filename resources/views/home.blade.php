@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center text-light py-5">Welcome To Our Movies List</h1>
    <div class="row row-cols-5">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <h3>{{$movie->title}}</h3>
                <h4>{{$movie->original_title}}</h4>
                <h5>Language: {{$movie->nationality}}</h5>
                <h5>Release: {{$movie->date}}</h5>
                <span>Rating: {{$movie->vote}}</span>
            </div>
        </div>
        @empty
        <div class="col">

        </div>
        @endforelse
    </div>
</div>
@endsection