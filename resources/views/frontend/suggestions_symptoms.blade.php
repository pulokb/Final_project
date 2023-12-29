@extends('layouts.frontend')
@section('title', 'Query Suggestions and Symptoms')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Add any additional content or structure here -->
        </div>
    </div>
    <div class="col-md-6"><br>
        <h3>{{ __('Your Report') }}</h3><br>
            <div class="report-section">
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
                <h5>Age</h5>
                <p>{{ $user_queries->age }} </p>
                <h5>Overall, how would you rate your physical health?</h5>
                <p>{{ $user_queries->physical_rating }} </p>
                <h5>Overall, how would you rate your mental health?</h5>
                <p>{{ $user_queries->mental_rating }} </p>
                <h5>During the past 4 weeks, have you had any problems with your work or daily life due to your physical health? </h5>
                <p>{{ $user_queries->dailylife_problems }} </p>
                <h5>During the past 4 weeks, have you had any problems with your work or daily life due to any emotional problems, such as feeling depressed, sad, or anxious?</h5>
                <p> {{ $user_queries->dailylife_emotinal }} </p>
                <h5>During the past 4 weeks, how often has your mental health affected your ability to get work done?</h5>
                <p> {{ $user_queries->affected_ability }} </p>
                <h5>Have you felt particularly low or down for more than 2 weeks in a row?</h5>
                <p> {{ $user_queries->low_down }} </p>
                <h5>During the past two weeks, how often has your mental health affected your relationships?</h5>
                <p> {{ $user_queries->affected_relationship }} </p>
                <h5>How often do you experience the following?</h5>
                <p> {{ $user_queries->experience }} </p>
            </div>

        <div class="report-section">
            <h4>{{ __('Suggestions') }}</h4>
            @if(!empty($suggestions))
                <ul>
                    @foreach($suggestions as $suggestion)
                        <li>{{ $suggestion }}</li>
                    @endforeach
                </ul>
            @else
                <p>No suggestions available. <a href="{{ route('suggestions') }}" class="btn btn-brand-rev">Explore suggestions</a></p>
            @endif
        </div>

        <div class="report-section">
            <h4>{{ __('Symptoms') }}</h4>
            @if(!empty($symptoms))
                <ul>
                    @foreach($symptoms as $symptom)
                        <li>{{ $symptom }}</li>
                    @endforeach
                </ul>
            @else
                <p>No symptoms available. <a href="{{ route('symptoms') }}" class="btn btn-brand-rev">Explore symptoms</a></p>
            @endif
        </div>

        <!-- Add a section for Doctor's feedback -->
        <div class="doctor-feedback">
            <h3>{{ __('Doctor\'s Feedback') }}</h3>
            <p>Provide feedback or additional information from the doctor here.</p>
        </div>

    </div>
</div>
<br>
@endsection
