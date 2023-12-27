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
                    <h3 class="font-normal">MindWellHub: At a glance</h3>
                 <br>
                    <h6>Where We Started</h6>
                    <p class="text-justify">Welcome to MindWellHub, a compassionate space dedicated to your mental well-being. At MindWellHub, we believe in the power of thoughtful introspection and professional guidance to foster a healthier mind. Our platform is designed to make mental health support accessible and personalized.
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
                        <p class="text-justify"> MindWellHub is more than a platform; it's a community that values your mental health journey. Together, let's embrace a path of self-discovery, support, and resilience.
                        Take the first step towards a healthier mind with MindWellHub. Your well-being is our priority.
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
                                MindWellHub is on a mission to break down barriers to mental health care. We aim to provide a user-friendly platform where individuals can openly express their mental health concerns through a carefully crafted questionnaire. This data is then reviewed by our team of experienced mental health professionals.
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

                    <hr>

                    <div class="col-md-6">
                        <div class="broc">
                            <img src="frontend\MindWellHublogo.png" alt="MindWellHub logo" width="100" height="100">
                           <br> @ 2023 Copyright By <a href="https://www.linkedin.com/in/pulokbiswas/" class="icon-file">Pulok Biswas</a> All Rights Reserved.
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>
@endsection
