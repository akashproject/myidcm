@extends('layouts.ad-main')
    @section('content')  
    <!-- Start of Header section
        ============================================= -->
    <div class="home-main-header">
        <div class="topbar">
            <div class="container-fluid">
                <div class="topbar__inner">
                    <ul class="list-unstyled topbar__info">
                        <li>
                            <span class="topbar__info__icon topbar__info__icon--email">
                                <i class="icon-email"></i>
                            </span>
                            <a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a>
                        </li>
                        <li>
                            <span class="topbar__info__icon">
                                <i class="icon-telephone"></i>
                            </span>
                            <a href="tel:{{ get_theme_setting('mobile') }}">+91 {{ get_theme_setting('mobile') }}</a>
                        </li>
                        
                    </ul><!-- /.list-unstyled topbar__info -->
                    <div class="topbar__social social-links">
                        <a href="{{ get_theme_setting('facebook') }}">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="{{ get_theme_setting('twitter') }}">
                            <i class="icon-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="{{ get_theme_setting('linkedin') }}">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            <span class="sr-only">Linkedin</span>
                        </a>
                        <a href="{{ get_theme_setting('youtube') }}">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                            <span class="sr-only">Youtube</span>
                        </a>
                    </div><!-- /.topbar__social social-links -->
                </div><!-- /.topbar__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar -->
    </div>
    <!-- Start of Header section
        ============================================= -->
    <section class="main-slider-one" id="home">
        <div class="main-slider-one__carousel eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
            "items": 1,
            "margin": 0,
            "animateIn": "fadeIn",
            "animateOut": "fadeOut",
            "loop": false,
            "smartSpeed": 100000,
            "nav": false,
            "dots": false,
            "autoplay": false,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"]
        }'>
            <div class="main-slider-one__item">
                <div class="container">
                    <div class="row gutter-y-60 align-items-center">
                        <div class="main-slider-one__col-content mt-0">
                            <div class="main-slider-one__content">
                                <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-1-1.png') }}" alt="shape" class="main-slider-one__content__shape slider-image">
                                <div class="banner-logo main-header__logo logo-retina">
                                    <a href="javascript:void(0)">
                                        <img src="{{ url('assets/logo/logo.gif') }}" alt="eduhive HTML" width="209">
                                    </a>
                                </div><!-- /.main-header__logo -->
                                <p class="main-slider-one__sub-title">No More Boring Lectures.</p><!-- /.sub-title -->
                                <h2 style="font-size: 42px!important;" class="main-slider-one__title">Best Digital Marketing Courses In India
                                </h2><!-- /.title -->
                                <div class="main-slider-one__description">
                                    <p class="main-slider-one__text">Join the top digital marketing course offering hands-on training in India. Master all essential digital marketing skills and get high-paying jobs at the top brands.</p><!-- /.text -->
                                </div><!-- /.description -->
                                <div class="main-slider-one__button mb-3">
                                    <a href="#lead-generate-popup" class="main-slider-one__btn-1 eduhive-btn open-popup-link">
                                        <span>Explore courses</span>
                                        <span class="eduhive-btn__icon">
                                            <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                        </span>
                                    </a><!-- /.eduhive-btn -->
                                </div><!-- /.button -->
                                <h6> Our Partner </h6>
                                <div class="partner-certification">
                                    <a href="https://www.google.com/partners/agency?id=4439042709" target="_blank">
                                        <img src="https://www.gstatic.com/partners/badge/images/2022/PartnerBadgeClickable.svg"/>
                                    </a>
                                    <a href="javascript:void(0);"> 
                                        <img src="{{ url('assets/frontend/images/resources/meta-pertner.jpg') }}" >
                                    </a>
                                </div>
                            </div><!-- /.main-slider-one__content -->
                        </div><!-- /.main-slider-one__col-content -->
                        <div class="main-slider-one__col-image mt-0">
                            <div class="main-slider-one__image">
                                <div class=" form-one">
                                    <div class="form-one__group">
                                        <form id="bannerLeadCaptureForm" class="contact-page__form" action="{{ route('capture-lead')}}" method="post" >
                                            @csrf
                                            @include('common.leadCaptureFormField')
                                        </form>
                                    </div>
                                    
                                </div><!-- /.main-slider-one__image__left -->
                                <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-1-3.png') }}" alt="shape" class="main-slider-one__image__shape-one slider-image">
                                <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-1-4.png') }}" alt="shape" class="main-slider-one__image__shape-two slider-image">
                                <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-1-5.png') }}" alt="shape" class="main-slider-one__image__shape-three slider-image">
                                <div class="main-slider-one__image__shape-four"></div><!-- /.main-slider-one__image__shape -->
                            </div><!-- /.main-slider-one__image -->
                        </div><!-- /.main-slider-one__col-image -->
                    </div><!-- /.row gutter-y-60 -->
                </div><!-- /.container -->
                <div class="main-slider-one__shape-one"></div><!-- /.main-slider-one__shape-one -->
                <div class="main-slider-one__shape-two"></div><!-- /.main-slider-one__shape-two -->
                <div class="main-slider-one__shape-three"></div><!-- /.main-slider-one__shape-three -->
                <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-1-2.png') }}" alt="shape" class="main-slider-one__shape-four slider-image">
            </div><!-- /.main-slider-one__item -->
        
        </div><!-- /.main-slider-one__carousel -->
    </section><!-- /.main-slider-one -->
    <section class="course-category">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="course-category__card p-3">
                        <div class="course-category__card__inner">
                            <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-1.jpg);"></div>
                        </div><!-- /.course-category__card__inner -->
                        <div class="course-category__card__content">
                            <div class="course-category__card__icon-box">
                                <span class="course-category__card__icon">
                                    <img src="{{ url('/assets/frontend/images/resources/award-symbol.png') }}" >
                                </span>
                            </div><!-- /.course-category__card__icon-box -->
                            <h4 class="course-category__card__title">By World Education Summit</h4><!-- /.course-category__card__title -->
                        </div><!-- /.course-category__card__content -->
                    </div><!-- /.course-category__card -->
                </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
                <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="course-category__card  p-3">
                        <div class="course-category__card__inner">
                            <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-1.jpg);"></div>
                        </div><!-- /.course-category__card__inner -->
                        <div class="course-category__card__content">
                            <div class="course-category__card__icon-box">
                                <span class="course-category__card__icon">
                                    <img src="{{ url('/assets/frontend/images/resources/award-symbol.png') }}" >
                                </span>
                            </div><!-- /.course-category__card__icon-box -->
                            <h4 class="course-category__card__title">By World Education Congress</h4><!-- /.course-category__card__title -->
                        </div><!-- /.course-category__card__content -->
                    </div><!-- /.course-category__card -->
                </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
                <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="course-category__card p-3">
                        <div class="course-category__card__inner">
                            <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-1.jpg);"></div>
                        </div><!-- /.course-category__card__inner -->
                        <div class="course-category__card__content">
                            <div class="course-category__card__icon-box">
                                <span class="course-category__card__icon">
                                    <img src="{{ url('/assets/frontend/images/resources/award-symbol.png') }}" >
                                </span>
                            </div><!-- /.course-category__card__icon-box -->
                            <h4 class="course-category__card__title">By Indian Education Congress</h4><!-- /.course-category__card__title -->
                        </div><!-- /.course-category__card__content -->
                    </div><!-- /.course-category__card -->
                </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
                <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="course-category__card p-3">
                        <div class="course-category__card__inner">
                            <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-1.jpg);"></div>
                        </div><!-- /.course-category__card__inner -->
                        <div class="course-category__card__content">
                            <div class="course-category__card__icon-box">
                                <span class="course-category__card__icon">
                                    <img src="{{ url('/assets/frontend/images/resources/award-symbol.png') }}" >
                                </span>
                            </div><!-- /.course-category__card__icon-box -->
                            <h4 class="course-category__card__title">By Education Leaders Conclave</h4><!-- /.course-category__card__title -->
                        </div><!-- /.course-category__card__content -->
                    </div><!-- /.course-category__card -->
                </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
                
            </div><!-- /.row gutter-y-30 -->
        </div><!-- /.container -->
        <div class="course-category__shape-one"></div><!-- /.course-category__shape-one -->
        <div class="course-category__shape-two"></div><!-- /.course-category__shape-two -->
    </section><!-- /.course-category section-space -->
@php
    $featuredCourse = getCourseById(1);
@endphp
<section class="featured_course mt-5" id="featured_course">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title">Most Demanding <span class="sec-title__title__shape">Course</span></h3>
        </div><!-- /.sec-title -->
        <div class="row gutter-y-50 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-one__image">
                    <div class="video-one wow fadeInUp" data-wow-duration="1500ms">
                        <div class="video-one__bg course-video" style="background-image: url(/assets/frontend/images/courses/featured-course.jpg);">
                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-one__video-btn video-btn video-popup">
                                <i class="icon-play"></i>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a><!-- /.video-one__video-btn -->
                        </div><!-- /.video-one__bg -->
                    </div><!-- /.video-one -->
                </div><!-- /.about-one__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-two__content">
                    <div class=" wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="sec-title__title">{{ $featuredCourse->name }}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-two__description wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        {{ $featuredCourse->excerpt }}
                    </div><!-- /.about-two__description -->
                    <div class="course-details__info-wrapper">
                        <div class="course-details__class">
                            <span class="course-details__class__icon">
                                <i class="icon-video"></i>
                            </span><!-- /.course-details__class__icon -->
                            <p class="course-details__class__text">5649 Enrolled</p><!-- /.course-details__class__text -->
                        </div><!-- /.course-details__class -->
                        <div class="course-details__review">
                            <span class="course-details__review__icon">
                                <i class="icon-star"></i>
                            </span><!-- /.course-details__review__icon -->
                            <p class="course-details__review__text"><span>3.4</span> <span>(36 Review)</span></p><!-- /.course-details__review__text -->
                        </div><!-- /.course-details__review -->
                    </div>
                    <div class="row">
                        <div class="course_highlights">
                            {!! $featuredCourse->highlights !!}
                        </div>
                    </div>
                
                    <div class="about-two__button wow fadeInUp mt-3" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
                            <span>Register Now</span>
                            <span class="eduhive-btn__icon">
                                <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                            </span>
                        </a><!-- /.eduhive-btn -->
                    </div><!-- /.about-two__button -->
                </div><!-- /.about-two__content -->
            </div>
        </div>
    </div>
</section>

<section class="faq-one faq-one--home section-space">
    <div class="container">
        <div class="row gutter-y-50 align-items-center">
            <div class="col-lg-12">
                <div class="funfact-one">
                    <div class="funfact-one__grid">
                        <div class="funfact-one__item funfact-one__item--secondary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="funfact-one__icon">
                                <span class="funfact-one__icon__inner"><i class="icon-instructors"></i></span>
                            </div><!-- /.funfact-one__icon -->
                            <h3 class="funfact-one__title count-box">
                                <span class="count-text" data-stop="8000" data-speed="1500">0</span>
                                <span>+</span>
                            </h3><!-- /.funfact-one__title -->
                            <p class="funfact-one__text">Satisfied Students</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__item -->
                        <div class="funfact-one__item funfact-one__item--primary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="funfact-one__icon">
                                <span class="funfact-one__icon__inner"><i class="icon-students"></i></span>
                            </div><!-- /.funfact-one__icon -->
                            <h3 class="funfact-one__title count-box">
                                <span class="count-text" data-stop="720" data-speed="1500">0</span>
                                <span>+</span>
                            </h3><!-- /.funfact-one__title -->
                            <p class="funfact-one__text">Classes Completed</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__item -->
                        <div class="funfact-one__item funfact-one__item--primary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="funfact-one__icon">
                                <span class="funfact-one__icon__inner"><i class="icon-batch-assign"></i></span>
                            </div><!-- /.funfact-one__icon -->
                            <h3 class="funfact-one__title count-box">
                                <span class="count-text" data-stop="30" data-speed="30">0</span>
                                <span>+</span>
                            </h3>
                            <p class="funfact-one__text">Placement Offices</p>
                        </div>
                        <div class="funfact-one__item funfact-one__item--secondary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="funfact-one__icon">
                                <span class="funfact-one__icon__inner"><i class=icon-connectibity"></i></span>
                            </div><!-- /.funfact-one__icon -->
                            <h3 class="funfact-one__title count-box">
                                <span class="count-text" data-stop="70" data-speed="1500">0</span>
                                <span>K+</span>
                            </h3>
                            <p class="funfact-one__text">Registered Employers</p>
                        </div>
                    </div><!-- /.rfunfact-one__grid -->
                </div><!-- /.funfact-one -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
    <div class="faq-one__image-inner">
        <img src="{{ url('/assets/frontend/images/faq/faq-2-1.jpg') }}" alt="faq">
    </div><!-- /.faq-one__image-inner -->
    <img src="{{ url('/assets/frontend/images/shapes/faq-shape-1-5.png') }}" alt="shape" class="faq-one__shape-three">
</section><!-- /.faq-one section-space -->

<section class="section-space-bottom position-relative" id="courses">
    <div class="courses-two__bg" style="background-image: url({{ url('/assets/frontend/images/shapes/courses-bg-2-1.png') }});"></div>
    <!-- /.courses-two__bg -->
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h6 class="sec-title__tagline">our courses</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title"><span>Our</span> <span class="sec-title__title__shape">Most</span> <span>Popular</span> <span class="sec-title__title__text color-primary">Courses</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
    </div><!-- /.container -->
    <div class="courses-two__container container">
        <div class="courses-two__carousel eduhive-owl__carousel--progress eduhive-owl__carousel--filter-with-counter eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-filters-div=".courses-two__filter-list" data-progress-options='{
                "size": "1px",
                "margin": "0 auto",
                "foregroundColor": "var(--eduhive-border-color)",
                "color": "var(--eduhive-base)",
                "borderRadius": 0,
                "transitionInterval": 1,
                "progressBarClassName": "courses-two__carousel__progress-bar",
                "scrollerClassName": "courses-two__carousel__scroller"
                }' data-owl-options='{
                "items": 1,
                "margin": 10,
                "loop": false,
                "smartSpeed": 700,
                "nav": true,
                "dots": false,
                "navContainer": ".courses-two__custome-navs",
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1,
                        "margin": 10
                    },
                    "576": {
                        "items": 1,
                        "margin": 30,
                        "stagePadding": 100
                    },
                    "768": {
                        "items": 1,
                        "margin": 30,
                        "stagePadding": 200
                    },
                    "992": {
                        "items": 2,
                        "margin": 30,
                        "stagePadding": 120
                    },
                    "1200": {
                        "items": 2,
                        "margin": 30,
                        "stagePadding": 270
                    },
                    "1400": {
                        "items": 3,
                        "margin": 30,
                        "stagePadding": 120
                    },
                    "1600": {
                        "items": 3,
                        "margin": 30,
                        "stagePadding": 210
                    },
                    "1800": {
                        "items": 3,
                        "margin": 30,
                        "stagePadding": 375
                    }
                }
            }'>
            @foreach(get_courses() as $course)
            <div class="item programming">
                <div class="course-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="course-card__image">
                        <img src="{{ url('assets/frontend/images/courses/'.$course->slug.'.gif')}}" alt="The Data Science Revolution: Upgrading Your Skills">
                        
                    </div><!-- /.course-card__image -->
                    <div class="course-card__content">
                        <div class="course-card__content__top">
                            <div class="course-card__category">{{ $course->no_of_module }} lessons</div><!-- /.course-card__category -->
                            <div class="course-card__duration">
                                <span class="course-card__duration__icon">
                                    <i class="icon-clock"></i>
                                </span><!-- /.course-card__duration__icon -->
                                {{ $course->duration }} Months
                            </div><!-- /.course-card__duration -->
                        </div><!-- /.course-card__content__top -->
                        <h3 class="course-card__title"><a href="{{ route('view-courses',$course->slug) }}">{{ $course->name }}</a></h3><!-- /.course-card__title -->
                        <div class="course-card__info">
                            <div class="course-card__lessons">
                                <span class="course-card__lessons__icon">       
                                    <i class="icon-open-book"></i>
                                </span><!-- /.course-card__lessons__icon -->
                                {{ $course->no_of_module }} lessons
                            </div><!-- /.course-card__lessons -->
                            <div class="course-card__students">
                                <span class="course-card__students__icon">
                                    <i class="icon-multiple-users-silhouette"></i>
                                </span><!-- /.course-card__lessons__icon -->
                                {{ $course->number_of_enrolled }} Students
                            </div><!-- /.course-card__students -->
                        </div><!-- /.course-card__info -->
                    </div><!-- /.course-card__content -->
                    <div class="course-card__hover" style="background-image: url(/assets/frontend/images/shapes/course-card-bg-1-1.png);">
                        <div class="course-card__hover__content">
                            <div class="course-card__content__top course-card__content__top--hover">
                                <div class="course-card__category">Experts</div><!-- /.course-card__category -->
                                <div class="course-card__duration">
                                    <span class="course-card__duration__icon">
                                        <i class="icon-clock"></i>
                                    </span><!-- /.course-card__duration__icon -->
                                    {{ $course->duration }} Months
                                </div><!-- /.course-card__duration -->
                            </div><!-- /.course-card__content__top -->
                            <h3 class="course-card__title course-card__title--hover"><a href="#lead-generate-popup" class="open-popup-link">{{ $course->name }}</a></h3><!-- /.course-card__title -->
                            <p class="course-card__text">{{ substr($course->excerpt, 0, 100) }}...</p><!-- /.course-card__text -->
                            <div class="course-card__ratings course-card__ratings--hover">
                                <div class="eduhive-ratings">
                                    <span class="eduhive-ratings__icon">
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.eduhive-ratings__icon -->
                                    <span class="eduhive-ratings__icon">
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.eduhive-ratings__icon -->
                                    <span class="eduhive-ratings__icon">
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.eduhive-ratings__icon -->
                                    <span class="eduhive-ratings__icon">
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.eduhive-ratings__icon -->
                                    <span class="eduhive-ratings__icon">
                                        <i class="fa fa-star"></i>
                                    </span><!-- /.eduhive-ratings__icon -->
                                </div><!-- /.product-ratings -->
                                <p class="course-card__ratings__text">5 Ratings</p><!-- /.course-card__ratings__text -->
                            </div><!-- /.course-card__ratings -->
                            <a href="#lead-generate-popup" class="course-card__btn eduhive-btn eduhive-btn--border open-popup-link">
                                <span>enroll now</span>
                                <span class="eduhive-btn__icon">
                                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                </span>
                            </a><!-- /.course-card__btn eduhive-btn -->
                            <div class="course-card__info course-card__info--hover">
                                <div class="course-card__lessons">
                                    <span class="course-card__lessons__icon">
                                        <i class="icon-open-book"></i>
                                    </span><!-- /.course-card__lessons__icon -->
                                    20 lessons
                                </div><!-- /.course-card__lessons -->
                                <div class="course-card__students">
                                    <span class="course-card__students__icon">
                                        <i class="icon-multiple-users-silhouette"></i>
                                    </span><!-- /.course-card__lessons__icon -->
                                    {{ $course->number_of_enrolled }} Students
                                </div><!-- /.course-card__students -->
                            </div><!-- /.course-card__info -->
                        </div><!-- /.course-card__hover__content -->
                    </div><!-- /.course-card__hover -->
                </div><!-- /.course-card -->
            </div><!-- /.item -->
            @endforeach
        </div><!-- /.courses-two__carousel -->
    </div><!-- /.courses-two__container container -->
    <div class="container">
        <div class="courses-two__custome-navs"></div><!-- /.courses-two__custome-navs -->
    </div><!-- /.container -->
    <div class="courses-two__box-one"></div><!-- /.courses-two__box-one -->
    <div class="courses-two__box-two"></div><!-- /.courses-two__box-two -->
    <img src="{{ url('/assets/frontend/images/shapes/courses-shape-2-1.png') }}" alt="shape" class="courses-two__shape-one">
    <img src="{{ url('/assets/frontend/images/shapes/courses-shape-2-2.png') }}" alt="shape" class="courses-two__shape-two">
</section><!-- /.courses-two section-space-bottom -->

<section class="testimonials-three section-space2" id="testimonials">
    <div class="testimonials-three__bg" style="background-image: url(/assets/frontend/images/shapes/testimonials-bg-3-1.png);"></div>
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h6 class="sec-title__tagline">our Recruiters</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">Our <span class="sec-title__title__text color-primary">Top <span class="sec-title__title__shape">Recruiters</span></span></h3><!-- /.sec-title__title -->
        </div>
    </div><!-- /.container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-8">
                <ul class="recruiters p-0">
                    @foreach(getRecruiters() as $key => $recruiter)
                    <div class="placement-redious-grid">
                        <a href="javascript:void(0)" class="placement-grid-img">
                            <img src="{{ getSizedImage($recruiter->featured_image) }}" alt="" class="width-100">
                        </a>
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div><!-- /.container -->
    <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-3-1.png') }}" alt="shape" class="testimonials-three__shape-one">
    <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-3-2.png') }}" alt="shape" class="testimonials-three__shape-two">
    <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-3-3.png') }}" alt="shape" class="testimonials-three__shape-three">
</section><!-- /.testimonials-three section-space2 -->

<section class="course-category section-space">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h6 class="sec-title__tagline">benefits</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title"><span class="sec-title__title__text">Digital Marketing Roles</span> <span class="sec-title__title__shape">Placed</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="row gutter-y-30">
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-1.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-briefcase"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">Performance Marketing Analyst</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-2.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-art-studies"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">Social Media Specialist</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-3.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-self-confidence"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">Digital Marketing Analyst</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-4.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-setting"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">Creative Writing & Content Marketing</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-5.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-healthcare"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">Influencer Marketing Specialist</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-6.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-coding-1"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">Category Management</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-7.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-clapperboard"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">Brand Associate</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="course-category__card">
                    <div class="course-category__card__inner">
                        <div class="course-category__card__bg" style="background-image: url(/assets/frontend/images/course-category/course-category-card-bg-1-8.jpg);"></div>
                    </div><!-- /.course-category__card__inner -->
                    <div class="course-category__card__content">
                        <div class="course-category__card__icon-box">
                            <span class="course-category__card__icon">
                                <i class="icon-megaphone"></i>
                            </span>
                        </div><!-- /.course-category__card__icon-box -->
                        <h4 class="course-category__card__title">SEO Analyst</h4><!-- /.course-category__card__title -->
                    </div><!-- /.course-category__card__content -->
                </div><!-- /.course-category__card -->
            </div><!-- /.col-xl-3 col-lg-4 col-sm-6 -->
        </div><!-- /.row gutter-y-30 -->
        <div class="row">
            <div class="col-12 text-center">
                <div class="about-two__button wow fadeInUp mt-3" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
                        <span>Select Your Designation</span>
                        <span class="eduhive-btn__icon">
                            <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                        </span>
                    </a><!-- /.eduhive-btn -->
                </div><!-- /.about-two__button -->
            </div>
        </div>
    </div><!-- /.container -->
    <div class="course-category__shape-one"></div><!-- /.course-category__shape-one -->
    <div class="course-category__shape-two"></div><!-- /.course-category__shape-two -->
</section><!-- /.course-category section-space -->

<section class="cta-one">
    <div class="container">
        <div class="cta-one__content wow fadeInUp" data-wow-duration="1500ms">
            <h2 class="cta-one__title">Become a confident digital marketer<br />
                 Grab A job or be a freelancer </h2><!-- /.cta-one__title -->
            <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
                <span>get started now</span>
                <span class="eduhive-btn__icon">
                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                </span>
            </a><!-- /.eduhive-btn -->
        </div><!-- /.cta-one__conten -->
    </div><!-- /.container -->
    <img src="{{ url('/assets/frontend/images/resources/cta-1-1.png') }}" alt="shape" class="cta-one__image-one">
    <img src="{{ url('/assets/frontend/images/resources/cta-1-2.png') }}" alt="shape" class="cta-one__image-two">
    <img src="{{ url('/assets/frontend/images/shapes/cta-shape-1-1.png') }}" alt="shape" class="cta-one__shape-one">
    <img src="{{ url('/assets/frontend/images/shapes/cta-shape-1-1.png') }}" alt="shape" class="cta-one__shape-two">
    <div class="cta-one__shape-box-one"></div><!-- /.cta-one__shape-box-one -->
    <div class="cta-one__shape-box-two wow fadeInRight" data-wow-duration="1500ms"></div><!-- /.cta-one__shape-box-two -->
</section><!-- /.cta-one -->

<section class="testimonials-one section-space" id="testimonials">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-xl-4">
                <div class="testimonials-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">Students' Experiences</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">Pick <span class="sec-title__title__text color-primary"><span class="sec-title__title__shape">on IDCM</span></span></h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="testimonials-one__description wow fadeInUp" data-wow-duration="1500ms">
                        <p class="testimonials-one__text">Our students don't just learn, they celebrate about their experience!</p><!-- /.testimonials-one__text -->
                    </div><!-- /.testimonial-one__description -->
                    <div class="testimonials-one__custome-navs"></div><!-- /.testimonials-one__custome-navs -->
                </div><!-- /.testimonials-one__content -->
            </div><!-- /.col-xl-4 -->
            <div class="col-xl-8">
                <div class="eduhive-stretch-element-inside-column">
                    <div class="testimonials-one__carousel eduhive-owl__carousel eduhive-owl__carousel--with-shadow owl-theme owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 30,
                "smartSpeed": 700,
                "loop": true,
                "autoplay": 600,
                "nav": true,
                "navContainer": ".testimonials-one__custome-navs",
                "dots": false,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "responsive":{
                    "0":{
                        "items": 1,
                        "margin": 10
                    },
                    "576":{
                        "items": 1.5
                    },
                    "768":{
                        "items": 1.8
                    },
                    "992":{
                        "items": 2.6
                    },
                    "1200":{
                        "items": 2.3
                    },
                    "1360":{
                        "items": 2.3
                    },
                    "1536":{
                        "items": 2.5
                    },
                    "1600":{
                        "items": 2.7
                    },
                    "1800":{
                        "items": 2.94
                    }
                }
                }'>
                        @foreach(getTestimonials() as $testimonial)
                            <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="testimonial-card">
                                    <div class="testimonial-card__top">
                                        <div class="testimonial-card__image">
                                            <img src="{{ (isset($testimonial->featured_image))?getSizedImage($testimonial->featured_image):'https://dummyimage.com/150x150' }}" alt="{{ $testimonial->name }}">
                                            <span class="testimonial-card__icon"><i class="icon-quote-2"></i></span><!-- /.testimonial-card__icon -->
                                        </div><!-- /.testimonial-card__image -->
                                        <div class="testimonial-card__identity">
                                            <h5 class="testimonial-card__name">{{ $testimonial->name }}</h5>
                                            <p class="testimonial-card__designation">{{ $testimonial->dasignation }}</p>
                                        </div><!-- /.testimonial-card__identity -->
                                    </div><!-- /.testimonial-card__top -->
                                    <div class="testimonial-card__content">
                                        <p class="testimonial-card__quote">{!! $testimonial->comment !!}</p><!-- /.testimonial-card__quote -->
                                        <!--div class="eduhive-ratings">
                                            <span class="eduhive-ratings__icon">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span class="eduhive-ratings__icon">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span class="eduhive-ratings__icon">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span class="eduhive-ratings__icon">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span class="eduhive-ratings__icon">
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div--><!-- /.product-ratings -->
                                    </div><!-- /.testimonial-card__content -->
                                </div><!-- /.testimonial-card -->
                            </div><!-- /.owl-slide-item-->
                        @endforeach
                    </div><!-- /.testimonials-one__carousel -->
                </div><!-- /.eduhive-stretch-element-inside-column -->
            </div><!-- /.col-xl-8 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
    <img src="{{ url('/assets/frontend/images/shapes/testimonials-shape-1-1.png') }}" alt="shape" class="testimonials-one__shape">
    <div class="testimonials-one__shape-box"></div><!-- /.testimonials-one__shape-box -->
</section><!-- /.testimonials-one section-space -->

<section class="instructors-one section-space2" id="instructors">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h6 class="sec-title__tagline">Success Stories</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">Our <span class="sec-title__title__text color-primary"><span class="sec-title__title__shape">students</span></span> say it best!</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="instructors-one__carousel eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 10,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "dots": true,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1,
                        "nav": true,
                        "dots": false,
                        "margin": 10
                    },
                    "576": {
                        "items": 2,
                        "margin": 30
                    },
                    "992": {
                        "items": 3,
                        "margin": 30
                    },
                    "1200": {
                        "items": 4,
                        "dots": false,
                        "margin": 30
                    }
                }
            }'>
            <div class="item">
                <div class="alumni-intro-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="alumni-intro-card__video" onclick="playVideo(this)">
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/swastika.png') }}" alt="Video Thumbnail">
                        <a href="{{ url('assets/frontend/videos/IDCM_Swastika.mp4') }}" class="video-one__video-btn video-btn video-popup">
                            <i class="icon-play"></i>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <div class="alumni-intro-card__hover">
                            
                        </div><!-- /.alumni-intro-card__hover -->
                    </div><!-- /.alumni-intro-card__image -->
                </div><!-- /.alumni-intro-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="alumni-intro-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="alumni-intro-card__video">
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/sumana.png') }}" alt="Video Thumbnail">
                        <a href="{{ url('assets/frontend/videos/IDCM_Sumana.mp4') }}" class="video-one__video-btn video-btn video-popup">
                            <i class="icon-play"></i>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <div class="alumni-intro-card__hover">
                            
                        </div><!-- /.alumni-intro-card__hover -->
                    </div><!-- /.alumni-intro-card__image -->
                </div><!-- /.alumni-intro-card -->
            </div>
            <div class="item">
                <div class="alumni-intro-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="alumni-intro-card__video">
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/amit.png') }}" alt="Video Thumbnail">
                        <a href="{{ url('assets/frontend/videos/IDCM_Amit.mp4') }}" class="video-one__video-btn video-btn video-popup">
                            <i class="icon-play"></i>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <div class="alumni-intro-card__hover">
                            
                        </div><!-- /.alumni-intro-card__hover -->
                    </div><!-- /.alumni-intro-card__image -->
                </div><!-- /.alumni-intro-card -->
            </div>
            <div class="item">
                <div class="alumni-intro-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="alumni-intro-card__video">
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/ashish.png') }}" alt="Video Thumbnail">
                        <a href="{{ url('assets/frontend/videos/IDCM_Ashish.mp4') }}" class="video-one__video-btn video-btn video-popup">
                            <i class="icon-play"></i>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <div class="alumni-intro-card__hover">
                            
                        </div><!-- /.alumni-intro-card__hover -->
                    </div><!-- /.alumni-intro-card__image -->
                </div><!-- /.alumni-intro-card -->
            </div>
        </div><!-- /.instructors-one__carousel -->
    </div><!-- /.container -->
    <img src="{{ url('assets/frontend/images/shapes/instructors-shape-1-1.png') }}" alt="shape" class="instructors-one__shape-one">
    <img src="{{ url('assets/frontend/images/shapes/instructors-shape-1-2.png') }}" alt="shape" class="instructors-one__shape-two">
    <div class="instructors-one__box-one"></div><!-- /.instructors-one__box-one -->
    <div class="instructors-one__box-two"></div><!-- /.instructors-one__box-two -->
</section><!-- /.instructors-one section-space2 -->

<section class="faq-one my-5">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-12">
                <div class="faq-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">faq’s</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">We Are Always Ensure <span class="sec-title__title__text color-primary">Best <br> Course</span> For <span class="sec-title__title__shape">Your Learning</span></h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="faq-one__accordion">
                        <div class="eduhive-accordion" data-grp-name="eduhive-accordion">
                            @foreach(getFaqsById($contentMain->faqs) as $faq)
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms">
                                <div class="accordion-title">
                                    <h4>{{ $faq->question }}</h4>
                                    <span class="accordion-title__icon">
                                        <i class="icon-double-arrow"></i>
                                    </span>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        {!! $faq->answer !!}
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div>
                            @endforeach
                        </div><!-- /.faq-accordion -->
                    </div><!-- /.faq-one__accordion -->
                </div><!-- /.faq-one__content -->
            </div>
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
    <img src="{{ url('/assets/frontend/images/shapes/faq-shape-1-1.png')}}" alt="shape" class="faq-one__shape-one">
    <img src="{{ url('/assets/frontend/images/shapes/faq-shape-1-4.png')}}" alt="shape" class="faq-one__shape-two">
</section><!-- /.faq-one section-space -->
@endsection