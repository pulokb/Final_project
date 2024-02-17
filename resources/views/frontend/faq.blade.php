@include('layouts.header')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{ asset('view/img/bg/14.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Frequently asked questions </h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('index') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>FAQ </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Where can I go to find therapy?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Different kinds of therapy are more effective based on the nature of the mental health condition and symptoms. For example, children will benefit from a therapist who specializes in children’s mental health. Explore various therapy options to find what suits you best. </p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="false">
                                What are the different types of mental health professionals?
                            </h6>
                            <div id="faq-item-2-2" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>There are many types of mental health professionals, each with specific expertise. Finding the right one for you may require some research. Consider psychologists, psychiatrists, counselors, social workers, and more.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                                Where can I find a support group?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Peer support is valuable. Many organizations offer support groups for consumers, family members, and friends. Some are peer-led, while others are led by mental health professionals. Connecting with others who share similar experiences can be beneficial.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-4" aria-expanded="false">
                                How can I access inpatient care?
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Inpatient care can help stabilize individuals on new medications, adjust to new symptoms, or provide necessary help during a crisis. If you or someone you know is in crisis, seek inpatient care as needed.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Where can I learn more about clinical trials?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Clinical trials involve testing new medications or treatment approaches. While they can offer innovative solutions, be aware of associated risks before enrolling in a trial.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-6" aria-expanded="false">
                                What is a Psychiatric Advance Directive?
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Similar to a medical advance directive, a psychiatric advance directive is a legal document completed during wellness. It provides instructions regarding treatment or services one wishes to have or not have during a mental health crisis. It can influence your care during challenging times.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Still need help? Reach out to support 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="{{ route('contact') }}" class="theme-btn-1 btn">Contact Us</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +8801793651750</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->

                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="#"><img src="view\img\blog\4.png" alt="Banner Image"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- FAQ AREA START -->

<!-- COUNTER UP AREA START -->
<div class="ltn__counterup-area section-bg-1 bg-image bg-overlay-theme-black-80--- pt-115 pb-70" data-bs-bg="{{ asset('view/img/bg/30.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <!-- <img src="img/icons/icon-img/2.png" alt="#">  -->
                        <i class="flaticon-add-user-1"></i>
                    </div>
                    <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Active Clients</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <!-- <img src="img/icons/icon-img/3.png" alt="#">  -->
                        <i class="flaticon-dining-table-with-chairs"></i>
                    </div>
                    <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Cup Of Coffee</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <!-- <img src="img/icons/icon-img/3.png" alt="#">  -->
                        <i class="flaticon-package"></i>
                    </div>
                    <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Get Rewards</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-center">
                    <div class="counter-icon">
                        <!-- <img src="img/icons/icon-img/3.png" alt="#">  -->
                        <i class="flaticon-maps-and-location"></i>
                    </div>
                    <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Country Cover</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-115 pb-45">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title-area ltn__section-title-2--- text-center">
                <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">News & Blogs</h6>
                <h1 class="section-title">Leatest Blogs</h1>
            </div>
        </div>
    </div>
    <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
        <!-- Blog Item -->
        <div class="col-lg-12">
            <div class="ltn__blog-item ltn__blog-item-3">
                <div class="ltn__blog-img">
                    <a href="#"><img src="view/img/blog/1.png" alt="#"></a>
                </div>
                <div class="ltn__blog-brief">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-author">
                                <a href="#"><i class="far fa-user"></i>by: Admin</a>
                            </li>
                            <li class="ltn__blog-tags">
                                <a href="#"><i class="fas fa-tags"></i>Mental Health</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="ltn__blog-title"><a href="#">How Mental Health Affects Your Physical Health and What You Can Do About It</a></h3>
                    <div class="ltn__blog-meta-btn">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>January 01, 2024</li>
                            </ul>
                        </div>
                        <div class="ltn__blog-btn">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Item -->
        <div class="col-lg-12">
            <div class="ltn__blog-item ltn__blog-item-3">
                <div class="ltn__blog-img">
                    <a href="#"><img src="view/img/blog/2.png" alt="#"></a>
                </div>
                <div class="ltn__blog-brief">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-author">
                                <a href="#"><i class="far fa-user"></i>by: Admin</a>
                            </li>
                            <li class="ltn__blog-tags">
                                <a href="#"><i class="fas fa-tags"></i>Mental Health</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="ltn__blog-title"><a href="#">The Impact of Childhood Abuse on Mental Health and How to Heal from Trauma</a></h3>
                    <div class="ltn__blog-meta-btn">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>January 01, 2024</li>
                            </ul>
                        </div>
                        <div class="ltn__blog-btn">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Item -->
        <div class="col-lg-12">
            <div class="ltn__blog-item ltn__blog-item-3">
                <div class="ltn__blog-img">
                    <a href="#"><img src="view/img/blog/3.png" alt="#"></a>
                </div>
                <div class="ltn__blog-brief">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-author">
                                <a href="#"><i class="far fa-user"></i>by: Admin</a>
                            </li>
                            <li class="ltn__blog-tags">
                                <a href="#"><i class="fas fa-tags"></i>Mental Health</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="ltn__blog-title"><a href="#">The Benefits of Online Counseling for Your Mental Well-Being</a></h3>
                    <div class="ltn__blog-meta-btn">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>January 01, 2024</li>
                            </ul>
                        </div>
                        <div class="ltn__blog-btn">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Item -->
        <div class="col-lg-12">
            <div class="ltn__blog-item ltn__blog-item-3">
                <div class="ltn__blog-img">
                    <a href="#"><img src="view/img/blog/4.png" alt="#"></a>
                </div>
                <div class="ltn__blog-brief">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-author">
                                <a href="#"><i class="far fa-user"></i>by: Admin</a>
                            </li>
                            <li class="ltn__blog-tags">
                                <a href="#"><i class="fas fa-tags"></i>Mental Health</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="ltn__blog-title"><a href="#">How to Break Free from Your Mental Barriers and Achieve Your Goals</a></h3>
                    <div class="ltn__blog-meta-btn">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>January 01, 2024</li>
                            </ul>
                        </div>
                        <div class="ltn__blog-btn">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Item -->
        <div class="col-lg-12">
            <div class="ltn__blog-item ltn__blog-item-3">
                <div class="ltn__blog-img">
                    <a href="#"><img src="view/img/blog/5.jpg" alt="#"></a>
                </div>
                <div class="ltn__blog-brief">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-author">
                                <a href="#"><i class="far fa-user"></i>by: Admin</a>
                            </li>
                            <li class="ltn__blog-tags">
                                <a href="#"><i class="fas fa-tags"></i>Mental Health</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="ltn__blog-title"><a href="#">The Importance of Self-Care and Self-Compassion for Your Mental Health</a></h3>
                    <div class="ltn__blog-meta-btn">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>January 01, 2024</li>
                            </ul>
                        </div>
                        <div class="ltn__blog-btn">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
</div>
<!-- BLOG AREA END -->

@include('layouts.footer')
