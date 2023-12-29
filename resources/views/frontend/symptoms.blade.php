<!-- resources/views/symptoms/index.blade.php -->

@extends('layouts.frontend')
@section('title', 'Symptoms')
@section('content')
    <div class="container">
        <h2>Mental Health Symptoms</h2>
        <br> <br>

        <div class="row">
            @foreach($symptoms as $symptom)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($symptom->image_path) }}" class="card-img-top" alt="{{ $symptom->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $symptom->title }}</h5>
                            <p class="card-text">{{ $symptom->content }}</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
