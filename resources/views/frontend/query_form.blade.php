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
                    <h2 class="title-2">Test Your Mental Health</h2>

                    <form id="healthForm" action="{{ route('suggestions_symptoms') }}" method="post">

                        @csrf

                        <h2>Questions for Education Issues:</h2>
                        <div class="mb-3">
                            <label for="student_q1">Have you been feeling unusually anxious or stressed about schoolwork or exams in the past two weeks?</label>
                            <br>
                            <select name="student_q1" id="student_q1" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('student_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="student_q2">Have you had trouble concentrating on your studies or completing assignments recently?</label>
                            <br>
                            <select name="student_q2" id="student_q2" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('student_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="student_q3">Have you lost interest in extracurricular activities or hobbies that you usually enjoy?</label>
                            <br>
                            <select name="student_q3" id="student_q3" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('student_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="student_q4">Have you been avoiding friends or social activities at school more than usual?</label>
                            <br>
                            <select name="student_q4" id="student_q4" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('student_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="student_q5">Have you felt overwhelmed by the academic workload or the pressure to perform well in school?</label>
                            <br>
                            <select name="student_q5" id="student_q5" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('student_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <h2>Questions for Family Issues:</h2>
                        <div class="mb-3">
                            <label for="family_q1">Have you experienced frequent conflicts or arguments with family members recently?</label>
                            <br>
                            <select name="family_q1" id="family_q1" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('family_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="family_q2">Do you feel unsupported or misunderstood by your family?</label>
                            <br>
                            <select name="family_q2" id="family_q2" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('family_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="family_q3">Have you been avoiding spending time at home or with family members more than usual?</label>
                            <br>
                            <select name="family_q3" id="family_q3" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('family_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="family_q4">Have family responsibilities been causing you significant stress or anxiety?</label>
                            <br>
                            <select name="family_q4" id="family_q4" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('family_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="family_q5">Have you felt unsafe or uncomfortable in your home environment recently?</label>
                            <br>
                            <select name="family_q5" id="family_q5" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('family_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <h2>Questions for Relationship Issues:</h2>
                        <div class="mb-3">
                            <label for="relationship_q1">Have you been feeling disconnected or distant from your partner recently?</label>
                            <br>
                            <select name="relationship_q1" id="relationship_q1" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('relationship_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="relationship_q2">Have you and your partner been having frequent arguments or disagreements?</label>
                            <br>
                            <select name="relationship_q2" id="relationship_q2" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('relationship_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="relationship_q3">Do you feel unsupported or unappreciated in your relationship?</label>
                            <br>
                            <select name="relationship_q3" id="relationship_q3" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('relationship_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="relationship_q4">Have you been avoiding spending time with your partner or communicating with them?</label>
                            <br>
                            <select name="relationship_q4" id="relationship_q4" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('relationship_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="relationship_q5">Have you been questioning whether you want to continue your relationship?</label>
                            <br>
                            <select name="relationship_q5" id="relationship_q5" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('relationship_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <h2>Questions for Job Issues:</h2>
                        <div class="mb-3">
                            <label for="job_q1">Have you been feeling unusually stressed or anxious about your job in the past two weeks?</label>
                            <br>
                            <select name="job_q1" id="job_q1" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('job_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="job_q2">Have you had trouble concentrating or staying productive at work recently?</label>
                            <br>
                            <select name="job_q2" id="job_q2" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('job_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="job_q3">Have you been feeling unappreciated or undervalued at your job?</label>
                            <br>
                            <select name="job_q3" id="job_q3" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('job_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="job_q4">Have you been avoiding work-related tasks or responsibilities more than usual?</label>
                            <br>
                            <select name="job_q4" id="job_q4" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('job_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="job_q5">Have you been considering quitting your job or looking for a new one?</label>
                            <br>
                            <select name="job_q5" id="job_q5" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('job_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <h2>General Mental Health Questions:</h2>
                        <div class="mb-3">
                            <label for="mental_health_q1">Have you had trouble falling asleep or staying asleep more than twice in the past week?</label>
                            <br>
                            <select name="mental_health_q1" id="mental_health_q1" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('mental_health_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="mental_health_q2">Have you found yourself feeling overwhelmed by daily tasks and responsibilities recently?</label>
                            <br>
                            <select name="mental_health_q2" id="mental_health_q2" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('mental_health_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="mental_health_q3">Have you felt more irritable or quick to anger than usual in the past two weeks?</label>
                            <br>
                            <select name="mental_health_q3" id="mental_health_q3" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('mental_health_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="mental_health_q4">Have you noticed significant changes in your eating habits or weight without intending to?</label>
                            <br>
                            <select name="mental_health_q4" id="mental_health_q4" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('mental_health_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="mental_health_q5">Have you felt persistently sad or hopeless for several days in a row recently?</label>
                            <br>
                            <select name="mental_health_q5" id="mental_health_q5" class="form-select" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('mental_health_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <br><br><br>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>

    @include('layouts.footer')
