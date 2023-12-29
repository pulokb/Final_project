@extends('layouts.frontend')
@section('title','About')
@section('content')
{{-- @include('includes.banner',['programName'=>'About']) --}}
<!-- WHO WE ARE -->
<section class="padding-top-70 padding-bottom-70">
    <div class="container">
        <div class="who-we">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="font-normal">MindCruiseCampus: At a glance</h3>
                 <br>
                    <h6>Where We Started</h6>
                    <p class="text-justify">Welcome to MindCruiseCampus, your voyage to mental well-being within the vibrant campus of Jahangirnagar University. MindCruiseCampus is a cutting-edge software designed to provide students with a supportive environment for enhancing their mental health. Our platform integrates a range of features to facilitate counseling, self-reflection, and community engagement, ensuring a holistic approach to well-being.
                        <h6>Features</h6>
                        <p class="text-justify"> Symptom and Suggestion Blog:
                            Explore our regularly updated blog where our mental health experts share insights on common symptoms, coping strategies, and self-care tips. Stay informed and inspired on your mental health journey.
                        </p>
                        <p class="text-justify">  Community Support:
                            Connect with others who may be facing similar challenges in our supportive community forum. Share experiences, seek advice, and build a network of understanding individuals.
                        </p>
                        <p class="text-justify">Resource Center:
                            Access a wealth of mental health resources, from articles and videos to recommended reading materials, all curated to empower you on your path to mental well-being.
                        </p>
                        <br>
                        <h6 class="font-normal">Join Us in Nurturing Your Mind</h6>
                        <p class="text-justify"> MindCruiseCampus is more than software; it's an invitation to embark on a voyage of mental well-being. Let MindCruiseCampus be your trusted navigator in navigating the challenges and triumphs of your academic journey at Jahangirnagar University.
                            Take the first step towards mental well-being with MindCruiseCampus. Your mental health matters to us.
                    </p>
                    </p>

                </div>
                <div class="col-md-6">

                    <!-- SERVICES -->
                    <ul class="row">

                        <!-- SERVICES -->
                        <li class="col-sm-12"> <i class="fa fa-eye"></i>
                            <h5>Our Mission</h5>
                            <p class="text-justify">
                                MindCruiseCampus is on a mission to break down barriers to mental health care. We aim to provide a user-friendly platform where individuals can openly express their mental health concerns through a carefully crafted questionnaire. This data is then reviewed by our team of experienced mental health professionals.
                            </p>

                        </li>

                        <!-- SERVICES -->
                        <li class="col-sm-12"> <i class="fa fa-rocket"></i>
                            <h5> How It Works</h5>
                            <p class="text-justify">User Submission: Users can share their mental health situation by answering a series of questions that cover various aspects of their well-being.

                            <p class="text-justify"> Professional Oversight: Our team of licensed mental health professionals carefully reviews each submission, considering individual needs and concerns.</p>

                            <p class="text-justify"> Personalized Feedback: Users receive personalized feedback, which includes an overview of their mental health situation, identified symptoms, and expert suggestions for improvement.</p>

                            </p>

                        </li>
                    </ul>

                </div>
            </div>
        </div>


    </div>
</section>
@endsection
