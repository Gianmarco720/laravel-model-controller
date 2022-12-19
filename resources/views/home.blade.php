@extends('layouts.app')

@section('content')

<h1>Welcome</h1>
<div class="container">
    <div class="row row-cols-md-3">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <h2>{{$movie->title}}</h2>
                <h3>{{$movie->original_title}}</h3>
                <h4>{{$movie->nationality}}</h4>
                <h4>{{$movie->date}}</h4>
                <span>{{$movie->vote}}</span>
            </div>
        </div>
        @empty
        <div class="col">

        </div>
        @endforelse
    </div>
</div>
@endsection