<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Add other stylesheets if needed -->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/navbar/bootstrap-4-navbar.css')}}" />

    <!-- ... (Other stylesheets) ... -->

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
        <!-- Header Area Start -->
        <header id="header-area">
            <div class="preheader-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-7 col-7">
                            <div class="preheader-left">
                                <a href="mailto:info@construc.com">mindcruise.campus@gmail.com</a>
                                <a href="phoneto:88-02-8000368">880-1793651750</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="frontend\logo.png" alt="MindCruiseCampus Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <!-- Add your specific left navbar items here -->
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
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="container main-content">
                    <main class="py-4">
                        @include('includes.message')<br>
                        @yield('content')
                    </main>
                </div>
            </div>
        </header>

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
                                        <img src="{{asset('frontend\logo.png')}}" alt="Logo" width="65" height="65"
                                            class="img-fluid" />
                                        <p>Take the first step towards mental well-being with MindCruiseCampus. Your mental health matters to us.</p>
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
                                    <p>A solution for mental health counseling to make it better</p>
                                    <div class="newsletter-form">
                                        <form id="cbx-subscribe-form" role="search">
                                            <input type="email" placeholder="Enter Your Email" id="subscribe" required>
                                            <button type="submit"><i class="fa fa-send"></i> Send</button>
                                        </form>
                                    </div>
                                    <div class="footer-social-icons">
                                        <a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->
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
    </body>
    </html>

