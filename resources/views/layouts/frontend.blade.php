<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


     <!-- GOOGLE FONT -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

     <!-- BOOTSTRAP CSS -->
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/navbar/bootstrap-4-navbar.css')}}" />

     <!--Animate css -->
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/animate/animate.css')}}" media="all" />

     <!-- FONT AWESOME CSS -->
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/fontawesome/css/font-awesome.min.css')}}" />

     <!--owl carousel css -->
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/owl-carousel/owl.carousel.css')}}" media="all" />

     <!--Magnific Popup css -->
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/magnific/magnific-popup.css')}}" media="all" />

     <!--Nice Select css -->
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/nice-select/nice-select.css')}}" media="all" />

     <!--Offcanvas css -->
     <link rel="stylesheet" href="{{asset('frontend/assets/vendor/js-offcanvas/css/js-offcanvas.css')}}" media="all" />

     <!-- MODERNIZER  -->
     <script src="{{asset('frontend/assets/vendor/modernizr/modernizr-custom.js')}}"></script>

     <!-- Main Master Style  CSS  -->
     <link id="cbx-style" data-layout="1" rel="stylesheet" href="{{asset('frontend/assets/css/style-default.min.css')}}"
         media="all" />
     <script type='text/javascript'
         src='https://platform-api.sharethis.com/js/sharethis.js#property=60155a7be7f5c10011bd3474&product=sop'
         async='async'></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MindCruiseCampus</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- parsley validator --}}
    <link href="{{ asset('parsley/parsley.css') }}" rel="stylesheet">
</head>

<body>
<!--== Header Area Start ==-->
<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:info@construc.com"><strong>Email:</strong> mindcruise.campus@gmail.com</a>
                        <a href="phoneto:88-02-8000368"><strong>Hotline:</strong> 880-1793651750</a>
                    </div>
                </div>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    MindCruiseCampus
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('query_form') }}">{{ __('Health Status') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('symptoms') }}">{{ __('Symptoms') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('suggestions') }}">{{ __('Suggestions') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->hasRole('user'))
                                <a class="dropdown-item" href="{{route('user.profile.view')}}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{route('user.change.password')}}">{{__('Change Password')}}</a>
                                @else
                                <a class="dropdown-item" href="{{route('admin.dashboard')}}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{route('admin.change.password')}}">{{__('Change Password')}}</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="nav-item dropdown">
                            <a id="navbarDropdownLang" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Language') }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownLang">
                                @php
                                    $languages = App\Models\Language::where('status',1)->get();
                                @endphp
                                @foreach ($languages as $language)
                                {{-- <a class="dropdown-item" href="#">{{ Session::get('locale') }}</a> --}}
                                <a class="dropdown-item" href="{{route('changeLanguage',$language->code)}}">{{$language->name}}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
        <main class="py-4">
            @include('includes.message')<br>
            @yield('content')
        </main>
        </div>
    </div>


    <footer id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <!-- Single Widget Start -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-widget-wrap">
                            <div class="widgei-body">
                                <div class="footer-about">
                                    <img src="{{asset('frontend\MindWellHublogo.png')}}" alt="Logo" width="65" height="65"
                                        class="img-fluid" />
                                    <p> Take the first step towards mental well-being with MindCruiseCampus. Your mental health matters to us. </p>
                                    <a href="#">Phone: 01793651750</a> <br> <a href="#">Fax: 01875655706</a> <br> <a
                                        href="#">Email: pulokbiswas.cse@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-widget-wrap">
                            <h4 class="widget-title">Get In Touch</h4>
                            <div class="widgei-body">
                                <p>A slouation for  mental health counseling make it better</p>
                                <div class="newsletter-form">
                                    <form id="cbx-subscribe-form" role="search">
                                        <input type="email" placeholder="Enter Your Email" id="subscribe" required>
                                        <button type="submit"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>
                                <div class="footer-social-icons">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i>facebook</a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i>twitter</a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i>linkedin</a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Widget End -->



        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer-bottom-text">
                            <p>© 2023 Pulok Biswas, All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!--== Footer Area End ==-->

    <!--== Scroll Top ==-->
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--== Scroll Top ==-->
</body>

</html>
