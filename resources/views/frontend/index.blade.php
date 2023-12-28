@extends('layouts.frontend')
@section('title','Home')
@section('content')
<h3>{{__('Welcome To MindWellHub')}}</h3>

<body>

<!-- Slider Section -->
<div class="slider-container">
    @foreach($sliders as $slider)
        <div class="slider-item">
            <img src="{{ asset('images/sliders/' . $slider['image']) }}" alt="Slider Image">
            <div class="slider-caption">
                <h2>{{ $slider['caption'] }}</h2>
                <!-- Add any additional elements for the caption -->
            </div>
        </div>
    @endforeach
</div>

   <!-- Short Intro Blog -->
<div class="intro-blog">
    <img src="{{ asset('images/intro/' ) }}" alt="Intro Blog Image">
    <h3>"MindWellHub: Nurturing Mental Well-being for Every Student's Journey."</h3>
    <p class="text-justify">Welcome to MindWellHub – Your haven for mental well-being at Jahangirnagar University. We offer confidential counseling services, providing a safe space to address academic stress, relationships, or any challenges you may face. Our platform empowers you with informative resources and self-help tools, supporting your journey to resilience. Our experienced counselors are dedicated to guiding you through life's complexities, ensuring you thrive during your university experience. Prioritize your mental health with MindWellHub – because taking care of yourself is a crucial part of your success. Your well-being is our priority, and we're here to help you every step of the way.</p>
</div>

<!-- Short Blogs with Doctor Information -->
<div class="doctor-blogs">
    <div class="row">
        @foreach($doctorBlogs as $doctorBlog)
            <div class="col-md-6">
                <div class="doctor-blog-circle">
                    <img src="{{ asset('images/doctors/' . $doctorBlog['image']) }}" alt="Doctor Blog Image">
                    <h4>{{ $doctorBlog['title'] }}</h4>
                    <p>{{ $doctorBlog['content'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Short List of Doctors -->
<div class="doctor-list">
    <ul>
        @foreach($doctors as $doctor)
            <li>
                <img src="{{ asset('images/doctors/' . $doctor['image']) }}" alt="Doctor Image">
                <h4>{{ $doctor['name'] }}</h4>
                <!-- Add more details about the doctor -->
                <a href="{{ route('doctor.profile', ['id' => $doctor['id']]) }}">View Profile</a>
            </li>
        @endforeach
    </ul>
</div>

<!-- Suggestion and Symptoms Section -->
<div class="suggestion-symptoms-section">
    <div class="suggestion-section">
        <h3>Suggestions</h3>
        <!-- Display suggestions -->
        @foreach($suggestions as $suggestion)
            <p>{{ $suggestion }}</p>
        @endforeach
    </div>
    <div class="symptoms-section">
        <h3>Symptoms</h3>
        <!-- Display symptoms -->
        @foreach($symptoms as $symptom)
            <p>{{ $symptom }}</p>
        @endforeach
    </div>
</div>

<!-- Include your footer, additional scripts, or other closing elements here -->

</body>

@endsection
