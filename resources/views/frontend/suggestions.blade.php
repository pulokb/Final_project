<!-- resources/views/suggestions/index.blade.php -->

@extends('layouts.frontend')
@section('title', 'Suggestions')
@section('content')
    <div class="container">
        <h2>Mental Health Suggestions</h2>
        <br> <br>

        <div class="row">
            @foreach($suggestions as $suggestion)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($suggestion->image_path) }}" class="card-img-top" alt="{{ $suggestion->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $suggestion->title }}</h5>
                            <p class="card-text">{{ $suggestion->content }}</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
