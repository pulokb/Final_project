@include('layouts.header')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{ asset('view/img/bg/14.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">{{ $blogPost->title }}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>{{ $blogPost->title }}</li>
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
            <div class="ltn__blog-details-inner">
                <div class="ltn__blog-details-post">
                    <div class="ltn__blog-content">
                        <h3>{{ $blogPost->title }}</h3>
                        <h3>{{ $blogPost->image }}</h3>
                        <p>{{ $blogPost->details }}</p>
                        <p>{{ $blogPost->note }}</p>
                        <!-- You can display other details of the blog post here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
