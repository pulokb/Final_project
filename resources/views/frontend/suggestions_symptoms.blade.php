@include('layouts.header')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="view/img/bg/14.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Test</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Result</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Add any additional content or structure here -->
        </div>
    </div>
    <div class="col-md-6"><br>
        <h3>{{ __('Your Report') }}</h3><br>
            <div class="report-section">

                <h5>1.Age</h5>
                <p>{{ $user_queries->age }} </p>
                <h5>2. Gender</h5>
                <p>{{ $user_queries->gender }} </p>
                <h5>3. Overall how would you rate your physical health?</h5>
                <p>{{ $user_queries->physical_health }} </p>
                <h5>4. Overall how would you rate your mental health?</h5>
                <p>{{ $user_queries->mental_health }} </p>
                <h5>5. Have you seen a therapist in the recent past?</h5>
                <p>{{ $user_queries->therapist }} </p>
                <h5>6. Are you currently taking any medication?</h5>
                <p> {{ $user_queries->medication }} </p>
                <h5>7. How many hours do you sleep per day?</h5>
                <p> {{ $user_queries->sleep_hours }} </p>
                <h5>8. How is your quality of sleep?</h5>
                <p> {{ $user_queries->sleep_quality }} </p>
                <h5>9. What is your relationship status?</h5>
                <p> {{ $user_queries->relationship_status }} </p>
                <h5>10. Are you satisfied with your current relationships and family ?</h5>
                <p> {{ $user_queries->current_relationship }} </p>
                <h5>11. How often do you smoke?</h5>
                <p> {{ $user_queries->smoking_frequency }} </p>
                <h5>12. How often do you drink?</h5>
                <p> {{ $user_queries->drinking_frequency }} </p>
                <h5>13. Have you changed your job recently?</h5>
                <p> {{ $user_queries->job_change }} </p>
                <h5>14. Have you changed your routine recently?</h5>
                <p> {{ $user_queries->routine_change }} </p>
                <h5>15. Are you going through a tough emotional situation?</h5>
                <p> {{ $user_queries->tough_emotional }} </p>
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
                <p>Suggestions available. <a href="{{ route('suggestions') }}" class="btn btn-brand-rev">Explore suggestions</a></p>
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
                <p>Symptoms. <a href="{{ route('symptoms') }}" class="btn btn-brand-rev">Explore symptoms</a></p>
            @endif
        </div>

        <!-- Add a section for Doctor's feedback -->
        <div class="doctor-feedback">
            <h3>{{ __('Doctor\'s Feedback') }}</h3>
            <p>"Your doctor will provide you with information."</p>
        </div>

    </div>
</div>
@include('layouts.footer')
