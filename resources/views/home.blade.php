@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-capitalise">movies</h1>
        </div>
        <div class="col-12">
            @foreach ($movies as $movie)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-title">
                        <h5>{{ $movie->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p>{{ $movie->original_title }}, {{ $movie->nationality }}, {{ $movie->vote }}, {{ $movie->date
                            }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection