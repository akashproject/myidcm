@extends('layouts.main')
@section('content')
<section class="main-slider-two" id="home">
    <div class="main-slider-two__carousel eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 0,
                "animateIn": "fadeIn",
                "animateOut": "fadeOut",
                "loop": false,
                "smartSpeed": 700000,
                "nav": false,
                "dots": false,
                "autoplay": false,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"]
            }'>
        <div class="main-slider-two__item">
            <div class="main-slider-two__bg" style="background-image: url({{ url('/assets/frontend/images/shapes/main-slider-bg-2-1.png') }});"></div><!-- /.main-slider-two__bg -->
            <div class="container">
                <div class="row gutter-y-60 align-items-center">
                    <div class="main-slider-two__col-content">
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__top">
                                <p class="main-slider-two__sub-title">The Pathway to Education</p><!-- /.sub-title -->
                            </div><!-- /.main-slider-two__top -->
                            <h2 class="main-slider-two__title">
                                <span class="main-slider-two__title__inner">Learn <span class="main-slider-two__title__text">new skills.</span> Prove <br> your potential.</span>
                            </h2><!-- /.title -->
                            <div class="main-slider-two__description">
                                <p class="main-slider-two__text" style="color: #333;line-height: 1.5rem;">{{ substr(strip_tags($contentMain->excerpt), 0, 100); }}</p><!-- /.text -->
                            </div><!-- /.description -->
                            <h6> Our Partners </h6>
                            <div class="partner-certification">
                                <a href="https://www.google.com/partners/agency?id=4439042709" target="_blank">
                                    <img src="https://www.gstatic.com/partners/badge/images/2022/PartnerBadgeClickable.svg"/>
                                </a>
                                <a href="javascript:void(0);"> 
                                    <img src="{{ url('assets/frontend/images/resources/meta-pertner.jpg') }}" >
                                </a>
                            </div>
                            <div class="main-slider-two__button">
                                <div class="main-slider-two__button__inner">
                                    <a href="#lead-generate-popup" class="main-slider-two__btn-1 eduhive-btn open-popup-link">
                                        <span>Find course</span>
                                        <span class="eduhive-btn__icon">
                                            <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                        </span>
                                    </a><!-- /.eduhive-btn -->
                                </div><!-- /.main-slider-two__button__inner -->
                                <div class="main-slider-two__button__inner">
                                    <a href="#lead-generate-popup" class="main-slider-two__btn-2 eduhive-btn eduhive-btn--border open-popup-link">
                                        <span>Download Brochure</span>
                                        <span class="eduhive-btn__icon">
                                            <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                        </span>
                                    </a><!-- /.eduhive-btn -->
                                </div><!-- /.main-slider-two__button__inner -->
                            </div><!-- /.button -->
                            <img src="{{ url('/assets/frontend/images/shapes/main-slider-shape-2-2.png') }}" alt="shape" class="main-slider-two__content__shape-one slider-image">
                            <img src="{{ url('/assets/frontend/images/shapes/main-slider-shape-2-3.png') }}" alt="shape" class="main-slider-two__content__shape-two slider-image">
                        </div><!-- /.main-slider-two__content -->
                    </div><!-- /.main-slider-two__col-content -->
                    <div class="main-slider-two__col-image">
                        <div class="main-slider-two__image">
                            <div class="main-slider-two__image__inner">
                                <div class="main-slider-two__image__mask">
                                    <img src="{{ url('/assets/frontend/images/main-slider/main-slider-2-1.jpg') }}" alt="slider image" class="slider-image">
                                </div><!-- /.main-slider-two__image__mask -->
                                <div class="main-slider-two__image__one">
                                    <img src="{{ url('/assets/frontend/images/main-slider/main-slider-2-2.jpg') }}" alt="slider image" class="slider-image">
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="main-slider-two__video-btn video-btn video-popup">
                                        <i class="icon-play"></i>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a><!-- /.video-btn -->
                                </div><!-- /.main-slider-two__image__one -->
                                <div class="main-slider-two__image__two">
                                    <img src="{{ url('/assets/frontend/images/main-slider/main-slider-2-3.jpg') }}" alt="slider image" class="slider-image">
                                </div><!-- /.main-slider-two__image__two -->
                                <div class="main-slider-two__student">
                                    <div class="main-slider-two__student__image">
                                        <img src="{{ url('/assets/frontend/images/main-slider/main-slider-student-2-1.png') }}" alt="student">
                                        <img src="{{ url('/assets/frontend/images/main-slider/main-slider-student-2-2.png') }}" alt="student">
                                        <img src="{{ url('/assets/frontend/images/main-slider/main-slider-student-2-3.png') }}" alt="student">
                                        <img src="{{ url('/assets/frontend/images/main-slider/main-slider-student-2-4.png') }}" alt="student">
                                        <h4 class="main-slider-two__student__count count-box">
                                            <span class="count-text" data-stop="2" data-speed="1500">0</span><span>k+</span>
                                        </h4><!-- /.main-slider-two__student__count -->
                                    </div><!-- /.main-slider-two__student__image -->
                                    <div class="main-slider-two__student__content">
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
                                        <p class="main-slider-two__student__text">enrolled students</p>
                                    </div><!-- /.main-slider-two__student__content -->
                                </div><!-- /.main-slider-two__student -->
                                <img src="{{ url('/assets/frontend/images/shapes/main-slider-shape-2-4.png') }}" alt="shape" class="main-slider-two__image__shape-one slider-image">
                                <img src="{{ url('/assets/frontend/images/shapes/main-slider-shape-2-5.png') }}" alt="shape" class="main-slider-two__image__shape-two slider-image">
                                <img src="{{ url('/assets/frontend/images/shapes/main-slider-shape-2-7.png') }}" alt="shape" class="main-slider-two__image__shape-three slider-image">
                                <div class="main-slider-two__image__shape-box"></div>
                            </div><!-- /.main-slider-two__image__inner -->
                        </div><!-- /.main-slider-two__image -->
                    </div><!-- /.main-slider-two__col-image -->
                </div><!-- /.row gutter-y-60 -->
            </div><!-- /.container -->
            <div class="main-slider-two__shape-box"></div><!-- /.main-slider-two__shape-box -->
            <img src="{{ url('/assets/frontend/images/shapes/main-slider-shape-2-1.png') }}" alt="shape" class="main-slider-two__shape-one slider-image">
            <img src="{{ url('/assets/frontend/images/shapes/main-slider-shape-2-6.png') }}" alt="shape" class="main-slider-two__shape-two slider-image">
        </div><!-- /.main-slider-two__item -->
        
    </div><!-- /.main-slider-two__carousel -->
</section><!-- /.main-slider-two -->

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
                        <a href="about.html" class="eduhive-btn">
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

<section class="courses-two section-space-bottom" id="courses">
    <div class="courses-two__bg" style="background-image: url({{ url('/assets/frontend/images/shapes/courses-bg-2-1.png') }});"></div>
    <!-- /.courses-two__bg -->
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h6 class="sec-title__tagline">our courses</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title"><span>Our</span> <span class="sec-title__title__shape">Most</span> <span>Popular</span> <span class="sec-title__title__text">Courses</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <ul class="list-unstyled courses-two__filter-list owl-filter-bar wow fadeInUp" data-wow-duration="1500ms">
            <li class="item active" data-owl-filter="*">All courses</li>
            <li class="item" data-owl-filter=".programming">programming</li>
            <li class="item" data-owl-filter=".digital-marketing">digital marketing</li>
            <li class="item" data-owl-filter=".graphic-design">graphic design</li>
        </ul><!-- /.list-unstyledf -->
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
                        <h3 class="course-card__title"><a href="data-science.html">{{ $course->name }}</a></h3><!-- /.course-card__title -->
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
                    <div class="course-card__hover" style="background-image: url(assets/frontend/images/shapes/course-card-bg-1-1.png);">
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
                            <h3 class="course-card__title course-card__title--hover"><a href="data-science.html">{{ $course->name }}</a></h3><!-- /.course-card__title -->
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
                            <a href="data-science.html" class="course-card__btn eduhive-btn eduhive-btn--border">
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

@if(!empty($galleryImg))
<section class="gallery-page my-5">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Our</span> <span class="sec-title__title__shape">Institute</span> <span>Story</span> <span class="sec-title__title__text">Activities</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="gallery-page__filter">
            <ul class="list-unstyled post-filter gallery-page__filter__list">
                @foreach($galleryImg as $key => $gallery)
                <li class="eduhive-btn" data-filter=".{{ $key }}"><span>{{ $gallery['name'] }}</span></li>
                @endforeach
                
            </ul><!-- /.list-unstyledf -->
        </div><!-- /.gallery-page__filter -->
        <div class="row masonry-layout filter-layout">
            @foreach($galleryImg as $key => $gallery)
                @foreach($gallery['images'] as $img)
                <div class="col-lg-3 col-md-6 filter-item {{ $key }}">
                    <div class="gallery-page__card">
                        <img src="{{url('/public/gallery/'.$img)}}" alt="">
                        <div class="gallery-page__card__hover">
                            <a href="{{url('/public/gallery/'.$img)}}" class="img-popup">
                                <span class="gallery-page__card__icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.gallery-page section-space -->
@endif

<section class="online-class section-space-bottom">
    <div class="online-class__inner">
        <div class="online-class__inner__bg" style="background-image: url({{ url('/assets/frontend/images/shapes/online-class-bg-1-1.png') }});">
        </div><!-- /.online-class__inner__bg -->
    </div><!-- /.online-class__inner -->
    <div class="container">
        <div class="video-one wow fadeInUp" data-wow-duration="1500ms">
            <div class="video-one__bg" style="background-image: url({{ url('/assets/frontend/images/resources/video-1-1.jpg') }});">
                <!-- <img src="{{ url('/assets/frontend/images/resources/video-1-2.jpg') }}" alt="video"> -->
                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-one__video-btn video-btn video-popup">
                    <i class="icon-play"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a><!-- /.video-one__video-btn -->
            </div><!-- /.video-one__bg -->
        </div><!-- /.video-one -->
        <div class="online-class__content">
            <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <h6 class="sec-title__tagline">online class</h6><!-- /.sec-title__tagline -->
                <h3 class="sec-title__title"><span>lockdown</span> <span class="sec-title__title__shape">can’t</span> <span>stop your</span> <span class="sec-title__title__text">learning</span></h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="online-class__description wow fadeInUp" data-wow-duration="1500ms">
                <p class="online-class__text">Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the.</p><!-- /.online-class__text -->
            </div><!-- /.online-class__description -->
            <div class="online-class__class-wrapper">
                <div class="online-class__class wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="online-class__class__icon online-class__class__icon--audio">
                        <span class="online-class__class__icon__inner">
                            <i class="icon-speaker-filled-audio-tool"></i>
                        </span>
                    </div><!-- /.online-class__class__icon -->
                    <h4 class="online-class__class__title">Audio classes</h4><!-- /.online-class__class__title -->
                </div><!-- /.online-class__class -->
                <div class="online-class__class wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="online-class__class__icon online-class__class__icon--live">
                        <span class="online-class__class__icon__inner">
                            <i class="icon-live-streaming"></i>
                        </span>
                    </div><!-- /.online-class__class__icon -->
                    <h4 class="online-class__class__title">live classes</h4><!-- /.online-class__class__title -->
                </div><!-- /.online-class__class -->
                <div class="online-class__class wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="online-class__class__icon online-class__class__icon--recorded">
                        <span class="online-class__class__icon__inner">
                            <i class="icon-clapperboard"></i>
                        </span>
                    </div><!-- /.online-class__class__icon -->
                    <h4 class="online-class__class__title">recorded classes</h4><!-- /.online-class__class__title -->
                </div><!-- /.online-class__class -->
            </div><!-- /.online-class__class-wrapper -->
        </div><!-- /.online-class__content -->
    </div><!-- /.container -->
    <div class="online-class__shape"></div><!-- /.online-class__shape -->
    <div class="online-class__box"></div><!-- /.online-class__box -->
</section><!-- /.online-class section-space-bottom -->

<section class="testimonials-one my-5" id="testimonials">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-xl-4">
                <div class="testimonials-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">our testimonials</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">what students <span class="sec-title__title__shape">say about</span> <span class="sec-title__title__text">idcm</span></h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="testimonials-one__description wow fadeInUp" data-wow-duration="1500ms">
                        <p class="testimonials-one__text">Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue.</p><!-- /.testimonials-one__text -->
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
                                    </div><!-- /.testimonial-card__content -->
                                </div><!-- /.testimonial-card -->
                            </div><!-- /.owl-slide-item-->
                        @endforeach
                    </div><!-- /.testimonials-one__carousel -->
                </div><!-- /.eduhive-stretch-element-inside-column -->
            </div><!-- /.col-xl-8 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
    <img src="/assets/frontend/images/shapes/testimonials-shape-1-1.png" alt="shape" class="testimonials-one__shape">
    <div class="testimonials-one__shape-box"></div><!-- /.testimonials-one__shape-box -->
</section><!-- /.testimonials-one section-space -->

<section class="all-placed-student mt-5">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Placed </span> <span class="sec-title__title__shape">Students</span><span class="sec-title__title__text"> Story</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="row">
            @foreach(getPlacements(6) as $placement)
                <div class="col-md-4"> 
                    <div class="placed-student-container my-2">
                        <div class="placed-student-content text-white margin-20px-right">
                            <h6 class="margin-10px-bottom"> <strong>{{$placement->name }}</strong> </h6>
                            <p> Designation: <strong>{{ $placement->dasignation}}</strong></p>
                            <p> Placed At: <strong>{{ $placement->placed_at}}</strong></p>
                            <p> Joining Salary : <strong>{{ $placement->joining_salary}}</strong></p>
                        </div>
                        <div class="student-image">                     
                            <img src="{{ getSizedImage($placement->featured_image) }}" alt="{{$placement->name }}" data-no-retina="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <a href="{{ route('page-view','all-placement-students') }}" class="eduhive-btn">
                    <span>Explore All</span>
                    <span class="eduhive-btn__icon">
                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@if($contentMain->faqs != null)
<section class="faq-one my-5">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-12">
                <div class="faq-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">faq’s</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">We Are Always Ensure <span class="sec-title__title__text">Best <br> Course</span> For <span class="sec-title__title__shape">Your Learning</span></h3><!-- /.sec-title__title -->
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
@endif
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection