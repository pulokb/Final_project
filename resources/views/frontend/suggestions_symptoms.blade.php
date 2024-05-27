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
    <style>
        .result {
            margin-bottom: 20px;
        }
        .danger {
            color: red;
            font-weight: bold;
        }
        .moderate {
            color: yellow;
            font-weight: bold;
        }
        .strong {
            color: green;
            font-weight: bold;
        }
        .chart-container {
            width: 200px;
            height: 200px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <div class="col-md-6"><br>
                <div class="report-section">

                    <div class="result" id="overall-result"></div>
                    <div class="chart-container" id="overall-chart-container"><canvas id="overall-chart"></canvas></div>

                    <div class="result" id="education-result"></div>
                    <div class="chart-container" id="education-chart-container"><canvas id="education-chart"></canvas></div>

                    <div class="result" id="family-result"></div>
                    <div class="chart-container" id="family-chart-container"><canvas id="family-chart"></canvas></div>

                    <div class="result" id="relationship-result"></div>
                    <div class="chart-container" id="relationship-chart-container"><canvas id="relationship-chart"></canvas></div>

                    <div class="result" id="job-result"></div>
                    <div class="chart-container" id="job-chart-container"><canvas id="job-chart"></canvas></div>

                    <div class="result" id="mental-health-result"></div>
                    <div class="chart-container" id="mental-health-chart-container"><canvas id="mental-health-chart"></canvas></div>

                    <script>
                        const userQueries = {
                            student_q1: "{{ $user_queries->student_q1 }}",
                            student_q2: "{{ $user_queries->student_q2 }}",
                            student_q3: "{{ $user_queries->student_q3 }}",
                            student_q4: "{{ $user_queries->student_q4 }}",
                            student_q5: "{{ $user_queries->student_q5 }}",
                            family_q1: "{{ $user_queries->family_q1 }}",
                            family_q2: "{{ $user_queries->family_q2 }}",
                            family_q3: "{{ $user_queries->family_q3 }}",
                            family_q4: "{{ $user_queries->family_q4 }}",
                            family_q5: "{{ $user_queries->family_q5 }}",
                            relationship_q1: "{{ $user_queries->relationship_q1 }}",
                            relationship_q2: "{{ $user_queries->relationship_q2 }}",
                            relationship_q3: "{{ $user_queries->relationship_q3 }}",
                            relationship_q4: "{{ $user_queries->relationship_q4 }}",
                            relationship_q5: "{{ $user_queries->relationship_q5 }}",
                            job_q1: "{{ $user_queries->job_q1 }}",
                            job_q2: "{{ $user_queries->job_q2 }}",
                            job_q3: "{{ $user_queries->job_q3 }}",
                            job_q4: "{{ $user_queries->job_q4 }}",
                            job_q5: "{{ $user_queries->job_q5 }}",
                            mental_health_q1: "{{ $user_queries->mental_health_q1 }}",
                            mental_health_q2: "{{ $user_queries->mental_health_q2 }}",
                            mental_health_q3: "{{ $user_queries->mental_health_q3 }}",
                            mental_health_q4: "{{ $user_queries->mental_health_q4 }}",
                            mental_health_q5: "{{ $user_queries->mental_health_q5 }}"
                        };

                        function calculateScore(queries, prefix) {
                            let score = 0;
                            for (let i = 1; i <= 5; i++) {
                                if (queries[`${prefix}_q${i}`] === "yes") {
                                    score += 20;
                                }
                            }
                            return score;
                        }

                        function calculateTotalScore(queries) {
                            let totalScore = 0;
                            for (let key in queries) {
                                if (queries[key] === "yes") {
                                    totalScore += 4;
                                }
                            }
                            return totalScore;
                        }

                        function getColorClass(score) {
                            if (score <= 40) {
                                return "danger";
                            } else if (score <= 60) {
                                return "moderate";
                            } else {
                                return "strong";
                            }
                        }

                        function getComment(score) {
                            if (score <= 40) {
                                return "Weak";
                            } else if (score <= 60) {
                                return "Moderate";
                            } else {
                                return "Good";
                            }
                        }

                        function generateChart(ctx, score) {
                            const color = score <= 40 ? 'red' : score <= 60 ? 'yellow' : 'green';
                            new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    datasets: [{
                                        data: [score, 100 - score],
                                        backgroundColor: [color, 'lightgrey']
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    plugins: {
                                        legend: {
                                            display: false
                                        }
                                    }
                                }
                            });
                        }

                        function displayResult(section, score) {
                            const result = document.getElementById(`${section}-result`);
                            const colorClass = getColorClass(score);
                            const comment = getComment(score);
                            result.className = `result ${colorClass}`;
                            result.innerHTML = `<h2>Questions for ${section.charAt(0).toUpperCase() + section.slice(1).replace('-', ' ')}:</h2>
                                                <p>Score: ${score}/100</p>
                                                <p>Mental Status: ${comment}</p>`;

                            const ctx = document.getElementById(`${section}-chart`).getContext('2d');
                            generateChart(ctx, score);
                        }

                        // Calculate section scores
                        const educationScore = calculateScore(userQueries, 'student');
                        const familyScore = calculateScore(userQueries, 'family');
                        const relationshipScore = calculateScore(userQueries, 'relationship');
                        const jobScore = calculateScore(userQueries, 'job');
                        const mentalHealthScore = calculateScore(userQueries, 'mental_health');

                        // Calculate overall score
                        const totalScore = calculateTotalScore(userQueries);

                        // Display overall result
                        const overallResult = document.getElementById('overall-result');
                        const overallColorClass = getColorClass(totalScore);
                        const overallComment = getComment(totalScore);
                        overallResult.className = `result ${overallColorClass}`;
                        overallResult.innerHTML = `<h2>Overall Mental Condition:</h2>
                                                   <p>Score: ${totalScore}/100</p>
                                                   <p>Mental Status: ${overallComment}</p>`;

                        const overallCtx = document.getElementById('overall-chart').getContext('2d');
                        generateChart(overallCtx, totalScore);

                        // Display individual section results
                        displayResult('education', educationScore);
                        displayResult('family', familyScore);
                        displayResult('relationship', relationshipScore);
                        displayResult('job', jobScore);
                        displayResult('mental-health', mentalHealthScore);
                    </script>

                <br><br>
                <h1> Your Report - </h1>
                <h3>Questions for Education Issues:</h3>
                <h5>Have you been feeling unusually anxious or stressed about schoolwork or exams in the past two weeks?</h5>
                <p>{{ $user_queries->student_q1 }}</p>
                <h5>Have you had trouble concentrating on your studies or completing assignments recently?</h5>
                <p>{{ $user_queries->student_q2 }}</p>
                <h5>Have you lost interest in extracurricular activities or hobbies that you usually enjoy?</h5>
                <p>{{ $user_queries->student_q3 }}</p>
                <h5>Have you been avoiding friends or social activities at school more than usual?</h5>
                <p>{{ $user_queries->student_q4 }}</p>
                <h5>Have you felt overwhelmed by the academic workload or the pressure to perform well in school?</h5>
                <p>{{ $user_queries->student_q5 }}</p>
                <h3>Questions for Family Issues:</h3>
                <h5>Have you experienced frequent conflicts or arguments with family members recently?</h5>
                <p>{{ $user_queries->family_q1 }}</p>
                <h5>Do you feel unsupported or misunderstood by your family?</h5>
                <p>{{ $user_queries->family_q2 }}</p>
                <h5>Have you been avoiding spending time at home or with family members more than usual?</h5>
                <p>{{ $user_queries->family_q3 }}</p>
                <h5>Have family responsibilities been causing you significant stress or anxiety?</h5>
                <p>{{ $user_queries->family_q4 }}</p>
                <h5>Have you felt unsafe or uncomfortable in your home environment recently?</h5>
                <p>{{ $user_queries->family_q5 }}</p>
                <h3>Questions for Relationship Issues:</h3>
                <h5>Have you been feeling disconnected or distant from your partner recently?</h5>
                <p>{{ $user_queries->relationship_q1 }}</p>
                <h5>Have you and your partner been having frequent arguments or disagreements?</h5>
                <p>{{ $user_queries->relationship_q2 }}</p>
                <h5>Do you feel unsupported or unappreciated in your relationship?</h5>
                <p>{{ $user_queries->relationship_q3 }}</p>
                <h5>Have you been avoiding spending time with your partner or communicating with them?</h5>
                <p>{{ $user_queries->relationship_q4 }}</p>
                <h5>Have you been questioning whether you want to continue your relationship?</h5>
                <p>{{ $user_queries->relationship_q5 }}</p>
                <h3>Questions for Job Issues:</h3>
                <h5>Have you been feeling unusually stressed or anxious about your job in the past two weeks?</h5>
                <p>{{ $user_queries->job_q1 }}</p>
                <h5>Have you had trouble concentrating or staying productive at work recently?</h5>
                <p>{{ $user_queries->job_q2 }}</p>
                <h5>Have you been feeling unappreciated or undervalued at your job?</h5>
                <p>{{ $user_queries->job_q3 }}</p>
                <h5>Have you been avoiding work-related tasks or responsibilities more than usual?</h5>
                <p>{{ $user_queries->job_q4 }}</p>
                <h5>Have you been considering quitting your job or looking for a new one?</h5>
                <p>{{ $user_queries->job_q5 }}</p>
                <h3>General Mental Health Questions:</h3>
                <h5>Have you had trouble falling asleep or staying asleep more than twice in the past week?</h5>
                <p>{{ $user_queries->mental_health_q1 }}</p>
                <h5>Have you found yourself feeling overwhelmed by daily tasks and responsibilities recently?</h5>
                <p>{{ $user_queries->mental_health_q2 }}</p>
                <h5>Have you felt more irritable or quick to anger than usual in the past two weeks?</h5>
                <p>{{ $user_queries->mental_health_q3 }}</p>
                <h5>Have you noticed significant changes in your eating habits or weight without intending to?</h5>
                <p>{{ $user_queries->mental_health_q4 }}</p>
                <h5>Have you felt persistently sad or hopeless for several days in a row recently?</h5>
                <p>{{ $user_queries->mental_health_q5 }}</p>
                <br><br>
                </div>

                <div class="report-section">
                    <h4>{{ __('Suggestions For You') }}</h4>
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

                {{-- <div class="report-section">
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
                </div> --}}

                <!-- Add a section for Doctor's feedback -->
                <div class="doctor-feedback">
                    <h3>{{ __('Doctor\'s Feedback') }}</h3>
                    <p>"Your doctor will provide you with information."</p>
                </div>
             </div>

</div>
@include('layouts.footer')
