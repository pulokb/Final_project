@extends('layouts.frontend')
@section('title','Home')
@section('content')
{{-- <h3>{{__('Welcome To MindCruiseCampus')}}</h3> --}}

<!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slider1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>MindCruiseCampus</h2>
                            <h3>A Solution for<span>Your Mental Health</span></h3>
                            <p>Guiding You Towards Wellness.</p>
                            <div class="slider-btn">
                                <a href="#about-area" class="btn btn-brand smooth-scroll">our mission</a>
                                <a href="{{route('about')}}" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slider2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>MindCruiseCampus</h2>
                            <h3>A Solution for<span>Your Mental Health</span></h3>
                            <p>Guiding You Towards Wellness.</p>
                            <div class="slider-btn">
                                <a href="#about-area" class="btn btn-brand smooth-scroll">our mission</a>
                                <a href="{{route('about')}}" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <!-- Social Icons Area Start -->
        <div class="social-networks-icon">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
            </ul>
        </div>
        <!-- Social Icons Area End -->

<!--== About Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="about-content-wrap">
                        <div class="section-title text-center text-lg-left">
                            <h2>Nurturing Mental Well-being for Every Student's Journey</h2>
                        </div>

                        <div class="about-thumb">
                            <img src="frontend\suggestions\suggestions1.jpg" alt="" class="img-fluid" >
                        </div>
                        <p>MindCruiseCampus is on a mission to break down barriers to mental health care. We aim to provide a user-friendly platform where individuals can openly express their mental health concerns through a carefully crafted questionnaire. This data is then reviewed by our team of experienced mental health professionals. </p>
                        <a href="{{route('about')}}" class="btn btn-brand about-btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->

<!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend\slider\star.png')}}" alt="Responsibility">
                    <h4>Community Support</h4>
                    <p> Connect with others who may be facing similar challenges in our supportive community forum. Share experiences, seek advice, and build a network of understanding individuals.
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend\slider\star.png')}}" alt="Responsibility">
                    <h4>Support for Students</h4>
                    <p>Reach out, share, and seek advice in our community forum. Let's navigate university life together. Your well-being is our priority – because every student deserves support.
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend\slider\star.png')}}" alt="Responsibility">
                    <h4>University Network</h4>
                    <p>share experiences, seek advice, and build a supportive community. Your well-being matters to us!
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend\slider\star.png')}}" alt="Responsibility">
                    <h4>Build Our Community</h4>
                    <p> Join us in fostering a supportive university network. Share, connect, and make a lasting impact together. Your involvement matters!
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>
<!--== Our Responsibility Area End ==-->

@endsection
