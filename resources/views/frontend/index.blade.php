@extends('layouts.frontend')
@section('title', 'Home')
@section('content')

<!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider1">
        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slider1">
            <div class="image-container">
                <div class="social-networks-icon" style="color: black; position: absolute; top: 50%; left: 10px; transform: translateY(-50%);">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="frontend/slider/flogo.jpg" alt="Facebook Logo" width="18" height="18">
                                <span>7.2k Likes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="frontend/slider/xlogo.jpg" alt="Twitter Logo" width="18" height="18">
                                <span>3.2m Followers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="frontend/slider/ylogo.jpg" alt="Youtube Logo" width="18" height="18">
                                <span>2.2k Subscribers</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <img src="frontend/slider/slider.png" alt="" class="img-fluid">
                <div class="text-overlay">
                    <div class="slider-content-container" style="background-color: rgba(0, 123, 255, 0.5); color: white;">
                        <h2>MindCruiseCampus</h2>
                        <h3>A Solution for<span> Your Mental Health</span></h3>
                        <p>Guiding You Towards Wellness.</p>
                        <div class="slider-btn">
                            <a href="#about-area" class="btn btn-brand smooth-scroll" style="background-color: white; color: #007bff;">Our Mission</a>
                            <a href="{{ route('about') }}" class="btn btn-brand-rev" style="background-color: #007bff; color: white;">Our Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->
    </div>
</section>


<br><br><br><br>
<!--== Slider Area End ==-->

<!--== About Area Start ==-->
<section id="about-area" class="section-padding container">
    <div class="about-area-wrapper">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-thumb">
                    <img src="frontend/support.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Nurturing Mental Well-being for Every Student's Journey</h2>
                </div>
                <p>MindCruiseCampus is on a mission to break down barriers to mental health care. We aim to provide a user-friendly platform where individuals can openly express their mental health concerns through a carefully crafted questionnaire. This data is then reviewed by our team of experienced mental health professionals.</p>
                <a href="{{ route('about') }}" class="btn btn-brand about-btn">know more</a>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->
<br><br><br><br>
<!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="section-title">
                <h2>Our Responsibility</h2>
            </div>
        </div>
    </div>
    <div class="row text-center text-sm-left">
        <div class="col-lg-3 col-sm-6">
            <div class="single-responsibility">
                <img src="frontend/support.png" alt="Responsibility">
                <h4>Community Support</h4>
                <p>Connect with others who may be facing similar challenges in our supportive community forum. Share experiences, seek advice, and build a network of understanding individuals.</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-responsibility">
                <img src="frontend/support.png" alt="Responsibility">
                <h4>Support for Students</h4>
                <p>Reach out, share, and seek advice in our community forum. Let's navigate university life together. Your well-being is our priority – because every student deserves support.</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-responsibility">
                <img src="frontend/support.png" alt="Responsibility">
                <h4>University Network</h4>
                <p>Share experiences, seek advice, and build a supportive community. Your well-being matters to us!</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-responsibility">
                <img src="frontend/support.png" alt="Responsibility">
                <h4>Build Our Community</h4>
                <p>Join us in fostering a supportive university network. Share, connect, and make a lasting impact together. Your involvement matters!</p>
            </div>
        </div>
    </div>
</section>
<!--== Our Responsibility Area End ==-->
<br><br><br>
@endsection
