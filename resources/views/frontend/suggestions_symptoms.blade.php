
@extends('layouts.frontend')
@section('title', 'Query Suggestions and Symptoms')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
    <div class="col-md-6"><br>
        <h3>{{ __('Query Suggestions and Symptoms') }}</h3><br>

        {{-- @php
            $suggestions_base=[
            "s1",
            "s2",
            "s3",
            "s4",
            "s5",
            "s6",
            "s7",
            "s8",
        ];
        $symptoms=["d1","d2","d3"];

        shuffle($suggestions_base);
        $suggestions = array_slice($suggestions_base, 0, 4);
        @endphp --}}

        {{-- @foreach ($user_queries as $query)
            <p> {{ $query->age }} </p>
            <p> {{ $query->gender }} </p>
        @endforeach --}}
        <p> {{ $user_queries }} </p>

        @if(!empty($suggestions))
            <h4>{{ __('Suggestions') }}</h4>
            <ul>
                @foreach($suggestions as $suggestion)
                    <li>{{ $suggestion }}</li>
                @endforeach
            </ul>
        @else
            <p>{{ __('No suggestions available.') }}</p>
        @endif

        @if(!empty($symptoms))
            <h4>{{ __('Symptoms') }}</h4>
            <ul>
                @foreach($symptoms as $symptom)
                    <li>{{ $symptom }}</li>
                @endforeach
            </ul>
        @else
            <p>{{ __('No symptoms available.') }}</p>
        @endif

    </div>
</div>
<br>
@endsection
