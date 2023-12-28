@extends('layouts.frontend')
@section('title', 'Questionnaire')
@section('content')
<br>
<div class="container">
    <div class="col-md-6"><br>
        <h3>{{ __('Mental Health Qurries') }}</h3><br>
        <form class="questionnaire-form" data-parsley-validate method="GET" action="{{ route("suggestions_symptoms") }}">
            @csrf

            <!-- Question 1 -->
            <div class="form-group">
                <label>{{ __('1. Age') }}</label>
                <input data-parsley-trigger="change" required type="text" class="form-control" name="age" placeholder="Enter your age">
            </div>

            <!-- Question 2 -->
            <div class="form-group">
                <label>{{ __('2. Gender') }}</label>
                <select class="form-control" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                    <option value="prefer_not_to_say">Prefer not to say</option>
                </select>
            </div>

            <!-- Question 3 -->
            <div class="form-group">
                <label>{{ __('3. Overall, how would you rate your physical health?') }}</label>
                <select class="form-control" name="physical_health_rating">
                    <option value="excellent">Excellent</option>
                    <option value="average">Average</option>
                    <option value="somewhat_poor">Somewhat poor</option>
                    <option value="poor">Poor</option>
                    <option value="not_sure">Not sure</option>
                </select>
            </div>

            <!-- Question 4 -->
            <div class="form-group">
                <label>{{ __('4. Overall, how would you rate your mental health?') }}</label>
                <select class="form-control" name="mental_health_rating">
                    <option value="excellent">Excellent</option>
                    <option value="somewhat_good">Somewhat good</option>
                    <option value="average">Average</option>
                    <option value="somewhat_poor">Somewhat poor</option>
                    <option value="poor">Poor</option>
                    <option value="not_sure">Not sure</option>
                </select>
            </div>

            <!-- Question 5 -->
            <div class="form-group">
                <label>{{ __('5. During the past 4 weeks, have you had any problems with your work or daily life due to your physical health?') }}</label>
                <select class="form-control" name="physical_health_problems">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not sure</option>
                </select>
            </div>

            {{-- <!-- Question 6 -->
            <div class="form-group">
                <label>{{ __('6. During the past 4 weeks, have you had any problems with your work or daily life due to any emotional problems, such as feeling depressed, sad, or anxious?') }}</label>
                <select class="form-control" name="emotional_problems">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not sure</option>
                </select>
            </div> --}}

            <!-- Question 7 -->
            <div class="form-group">
                <label>{{ __('7. During the past 4 weeks, how often has your mental health affected your ability to get work done?') }}</label>
                <select class="form-control" name="mental_health_effect_on_work">
                    <option value="very_often">Very often</option>
                    <option value="somewhat_often">Somewhat often</option>
                    <option value="not_so_often">Not so often</option>
                    <option value="not_at_all">Not at all</option>
                </select>
            </div>

            <!-- Question 8 -->
            <div class="form-group">
                <label>{{ __('8. Have you felt particularly low or down for more than 2 weeks in a row?') }}</label>
                <select class="form-control" name="felt_low_for_2_weeks">
                    <option value="very_often">Very often</option>
                    <option value="somewhat_often">Somewhat often</option>
                    <option value="not_so_often">Not so often</option>
                    <option value="not_at_all">Not at all</option>
                </select>
            </div>

            <!-- Question 9 -->
            <div class="form-group">
                <label>{{ __('9. During the past two weeks, how often has your mental health affected your relationships?') }}</label>
                <select class="form-control" name="mental_health_effect_on_relationships">
                    <option value="very_often">Very often</option>
                    <option value="somewhat_often">Somewhat often</option>
                    <option value="not_so_often">Not so often</option>
                    <option value="not_at_all">Not at all</option>
                </select>
            </div>

            <!-- Question 10 -->
            <div class="form-group">
                <label>{{ __('10. How often do you experience the following?') }}</label>
                <div class="row">
                    <div class="col-md-3">
                        <label>{{ __('Never') }}</label>
                        <input type="radio" name="experience_frequency" value="never">
                    </div>
                    <div class="col-md-3">
                        <label>{{ __('Once in a while') }}</label>
                        <input type="radio" name="experience_frequency" value="once_in_a_while">
                    </div>
                    <div class="col-md-3">
                        <label>{{ __('About half the time') }}</label>
                        <input type="radio" name="experience_frequency" value="about_half_the_time">
                    </div>
                    <div class="col-md-3">
                        <label>{{ __('Most of the time') }}</label>
                        <input type="radio" name="experience_frequency" value="most_of_the_time">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>
    </div>
</div>
<br>
@endsection
