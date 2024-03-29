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
                                <li>Test</li>
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
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Test Your Mental Health</h4>

                    <form id="healthForm" action="{{ route('suggestions_symptoms') }}" method="post">

                        @csrf

                        <label for="age">1. Age:</label><br>
                        <input type="number" id="age" name="age" required><br><br>

                        <label>2. Gender:</label><br>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Others</label><br>
                        <input type="radio" id="prefer_not_say" name="gender" value="prefer_not_say">
                        <label for="prefer_not_say">Prefer not to say</label><br><br>

                        <label for="physical_health">3. Overall how would you rate your physical health?</label><br>
                        <select id="physical_health" name="physical_health" required>
                            <option value="excellent">Excellent</option>
                            <option value="average">Average</option>
                            <option value="somewhat_poor">Somewhat poor</option>
                            <option value="poor">Poor</option>
                            <option value="not_sure">Not sure</option>
                        </select><br><br>

                        <label for="mental_health">4. Overall how would you rate your mental health?</label><br>
                        <select id="mental_health" name="mental_health" required>
                            <option value="excellent">Excellent</option>
                            <option value="somewhat_good">Somewhat good</option>
                            <option value="average">Average</option>
                            <option value="somewhat_poor">Somewhat poor</option>
                            <option value="poor">Poor</option>
                            <option value="not_sure">Not sure</option>
                        </select><br><br>

                        <label for="therapist">5. Have you seen a therapist in the recent past?</label><br>
                        <input type="radio" id="therapist_yes" name="therapist" value="yes">
                        <label for="therapist_yes">Yes</label><br>
                        <input type="radio" id="therapist_no" name="therapist" value="no">
                        <label for="therapist_no">No</label><br><br>

                        <label for="medication">6. Are you currently taking any medication?</label><br>
                        <input type="radio" id="medication_yes" name="medication" value="yes">
                        <label for="medication_yes">Yes</label><br>
                        <input type="radio" id="medication_no" name="medication" value="no">
                        <label for="medication_no">No</label><br><br>

                        <label for="sleep_hours">7. How many hours do you sleep per day?</label><br>
                        <select id="sleep_hours" name="sleep_hours" required>
                            <option value="4">Less than 4</option>
                            <option value="4-6">4-6</option>
                            <option value="7-9">7-9</option>
                            <option value="9+">9+</option>
                        </select><br><br>

                        <label for="sleep_quality">8. How is your quality of sleep?</label><br>
                        <select id="sleep_quality" name="sleep_quality" required>
                            <option value="very_bad">Very bad</option>
                            <option value="bad">Bad</option>
                            <option value="normal">Normal</option>
                            <option value="good">Good</option>
                            <option value="very_good">Very good</option>
                        </select><br><br>

                        <label for="relationship_status">9. What is your relationship status?</label><br>
                        <select id="relationship_status" name="relationship_status" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widowed">Widowed</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                        </select><br><br>

                        <label for="current_relationship">10. Are you satisfied with your current relationships and family ?</label><br>
                        <input type="radio" id="current_relationship_yes" name="current_relationship" value="yes">
                        <label for="current_relationship_yes">Yes</label><br>
                        <input type="radio" id="current_relationship_sometimes" name="current_relationship"
                            value="sometimes">
                        <label for="current_relationship_sometimes">Sometimes</label><br>
                        <input type="radio" id="current_relationship_no" name="current_relationship" value="no">
                        <label for="current_relationship_no">No</label><br><br>

                        <label for="smoking_frequency">11. How often do you smoke?</label><br>
                        <select id="smoking_frequency" name="smoking_frequency" required>
                            <option value="never">Never</option>
                            <option value="few_weeks">Once in a few weeks</option>
                            <option value="everyday">Once everyday</option>
                            <option value="more_than_once">More than once everyday</option>
                        </select><br><br>

                        <label for="drinking_frequency">12. How often do you drink?</label><br>
                        <select id="drinking_frequency" name="drinking_frequency" required>
                            <option value="never">Never</option>
                            <option value="few_weeks">Once in a few weeks</option>
                            <option value="everyday">Once everyday</option>
                            <option value="more_than_once">More than once everyday</option>
                        </select><br><br>

                        <label for="job_change">13. Have you changed your job recently?</label><br>
                        <input type="radio" id="job_change_yes" name="job_change" value="yes">
                        <label for="job_change_yes">Yes</label><br>
                        <input type="radio" id="job_change_no" name="job_change" value="no">
                        <label for="job_change_no">No</label><br>
                        <input type="radio" id="job_change_na" name="job_change" value="na">
                        <label for="job_change_na">NA</label><br><br>

                        <label for="routine_change">14. Have you changed your routine recently?</label><br>
                        <input type="radio" id="routine_change_quite" name="routine_change" value="quite">
                        <label for="routine_change_quite">Yes, quite a bit</label><br>
                        <input type="radio" id="routine_change_slightly" name="routine_change" value="slightly">
                        <label for="routine_change_slightly">Yes, slightly</label><br>
                        <input type="radio" id="routine_change_not" name="routine_change" value="not">
                        <label for="routine_change_not">Not at all</label><br><br>

                        <label for="tough_emotional">15. Are you going through a tough emotional situation?</label><br>
                        <input type="radio" id="tough_emotional_yes" name="tough_emotional" value="yes">
                        <label for="tough_emotional_yes">Yes</label><br>
                        <input type="radio" id="tough_emotional_no" name="tough_emotional" value="no">
                        <label for="tough_emotional_no">No</label><br><br>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>

    @include('layouts.footer')
