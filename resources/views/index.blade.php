@extends('layouts.main')
@section('content')
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
                    <div class="main-slider-one__col-content">
                        <div class="main-slider-one__content">
                            <img src="assets/frontend/images/shapes/main-slider-shape-1-1.png" alt="shape" class="main-slider-one__content__shape slider-image">
                            <p class="main-slider-one__sub-title">The Pathway to Education</p><!-- /.sub-title -->
                            <h2 class="main-slider-one__title">
                                Learn New <span class="main-slider-one__title__shape">Skills Online</span> <br>
                                With Top <span class="main-slider-one__title__text">instructors</span>
                            </h2><!-- /.title -->
                            <div class="main-slider-one__description">
                                <p class="main-slider-one__text">There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority Have Suffered Alteration In Some.</p><!-- /.text -->
                            </div><!-- /.description -->
                            <h6> Our Partners </h6>
                            <div class="partner-certification">
                                <a href="javascript:void(0);"> 
                                    <img src="https://dummyimage.com/150x100" >
                                </a>
                                <a href="javascript:void(0);"> 
                                    <img src="https://dummyimage.com/150x100" >
                                </a>
                            </div>
                            <div class="main-slider-one__button">
                                <a href="courses.html" class="main-slider-one__btn-1 eduhive-btn">
                                    <span>find course</span>
                                    <span class="eduhive-btn__icon">
                                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                    </span>
                                </a><!-- /.eduhive-btn -->
                                <a href="about.html" class="main-slider-one__btn-2 eduhive-btn eduhive-btn--border">
                                    <span>About us</span>
                                    <span class="eduhive-btn__icon">
                                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                    </span>
                                </a><!-- /.eduhive-btn -->
                            </div><!-- /.button -->
                        </div><!-- /.main-slider-one__content -->
                    </div><!-- /.main-slider-one__col-content -->
                    <div class="main-slider-one__col-image">
                        <div class="main-slider-one__image">
                            <div class="main-slider-one__image__left">
                                <div class="main-slider-one__image__one">
                                    <div class="main-slider-one__image__one__inner">
                                        <img src="assets/frontend/images/main-slider/main-slider-1-1.webp" alt="slider image" class="slider-image">
                                    </div><!-- /.main-slider-one__image__one__inner -->
                                    <div class="total-student">
                                        <div class="total-student__inner">
                                            <div class="total-student__image">
                                                <img src="assets/frontend/images/main-slider/main-slider-student-1-1.png" alt="student" class="slider-image">
                                                <img src="assets/frontend/images/main-slider/main-slider-student-1-2.png" alt="student" class="slider-image">
                                            </div><!-- /.total-student__image -->
                                            <h4 class="total-student__text count-box">
                                                <span class="count-text" data-stop="200" data-speed="1500">0</span><span>k+ <br> Students</span>
                                            </h4><!-- /.total-student__text -->
                                        </div><!-- /.total-student__inner -->
                                    </div><!-- /.total-student -->
                                </div><!-- /.main-slider-one__image__one -->
                            </div><!-- /.main-slider-one__image__left -->
                            <div class="main-slider-one__image__right">
                                <div class="main-slider-one__image__two">
                                    <img src="assets/frontend/images/main-slider/main-slider-1-2.png" alt="slider image" class="slider-image">
                                </div><!-- /.main-slider-one__image__two -->
                                <div class="main-slider-one__image__three">
                                    <img src="assets/frontend/images/main-slider/main-slider-1-3.png" alt="slider image" class="slider-image">
                                </div><!-- /.main-slider-one__image__three -->
                            </div><!-- /.main-slider-one__image__right -->
                            <img src="assets/frontend/images/shapes/main-slider-shape-1-3.png" alt="shape" class="main-slider-one__image__shape-one slider-image">
                            <img src="assets/frontend/images/shapes/main-slider-shape-1-4.png" alt="shape" class="main-slider-one__image__shape-two slider-image">
                            <img src="assets/frontend/images/shapes/main-slider-shape-1-5.png" alt="shape" class="main-slider-one__image__shape-three slider-image">
                            <div class="main-slider-one__image__shape-four"></div><!-- /.main-slider-one__image__shape -->
                        </div><!-- /.main-slider-one__image -->
                    </div><!-- /.main-slider-one__col-image -->
                </div><!-- /.row gutter-y-60 -->
            </div><!-- /.container -->
            <div class="main-slider-one__shape-one"></div><!-- /.main-slider-one__shape-one -->
            <div class="main-slider-one__shape-two"></div><!-- /.main-slider-one__shape-two -->
            <div class="main-slider-one__shape-three"></div><!-- /.main-slider-one__shape-three -->
            <img src="assets/frontend/images/shapes/main-slider-shape-1-2.png" alt="shape" class="main-slider-one__shape-four slider-image">
        </div><!-- /.main-slider-one__item -->
    
    </div><!-- /.main-slider-one__carousel -->
</section><!-- /.main-slider-one -->

<section class="courses-one pt-5" id="courses">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Our</span> <span class="sec-title__title__shape">Most</span> <span>Popular</span> <span class="sec-title__title__text">Courses</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
    </div><!-- /.container -->
    <div class="courses-one__container container">
        <div class="courses-one__carousel eduhive-owl__carousel--with-shadow eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 10,
                "loop": true,
                "smartSpeed": 700,
                "rtl": true,
                "nav": true,
                "dots": false,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1,
                        "margin": 10
                    },
                    "768": {
                        "items": 2,
                        "margin": 30
                    },
                    "992": {
                        "items": 3,
                        "margin": 30
                    },
                    "1200": {
                        "items": 3.3,
                        "margin": 30
                    },
                    "1400": {
                        "items": 3.4,
                        "margin": 30
                    },
                    "1536": {
                        "items": 3.5,
                        "margin": 30
                    },
                    "1600": {
                        "items": 3.7,
                        "margin": 30
                    },
                    "1800": {
                        "items": 3.94,
                        "margin": 30
                    }
                }
            }'>
            @foreach(get_courses() as $course)
            <div class="item">
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
        </div><!-- /.courses-one__carousel -->
    </div><!-- /.courses-one__container container -->
    <img src="assets/frontend/images/shapes/courses-shape-1-1.png" alt="shape" class="courses-one__shape">
</section><!-- /.courses-one section-space-top2 -->

<section class="about-one section-space" id="about">
    <div class="about-one__bg" style="background-image: url(assets/frontend/images/shapes/about-bg-1-1.png);"></div>
    <div class="container">
        <div class="row gutter-y-50 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-one__image">
                    <div class="about-one__image__one">
                        <img src="assets/frontend/images/about/about-1-1.jpg" alt="about">
                        <div class="about-one__video">
                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="about-one__video__btn video-btn video-popup">
                                <i class="icon-play"></i>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a><!-- /.about-one__video-btn -->
                            <p class="about-one__video__text">play now</p><!-- /.about-one__video__text -->
                        </div><!-- /.about-one__video -->
                    </div><!-- /.about-one__image__one -->
                    <div class="about-one__image__two">
                        <img src="assets/frontend/images/about/about-1-2.jpg" alt="about">
                    </div><!-- /.about-one__image__two -->
                    <img src="assets/frontend/images/shapes/about-shape-1-1.png" alt="about" class="about-one__image__shape">
                    <div class="about-one__image__circle">
                        <div class="about-one__image__circle__inner"></div>
                    </div><!-- /.about-one__image__circle -->
                </div><!-- /.about-one__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">about us</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">we are the most popular online <br> <span class="sec-title__title__shape">skill development</span> <span class="sec-title__title__text">platform</span></h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__description wow fadeInUp" data-wow-duration="1500ms">
                        <p class="about-one__text">Viverra Ipsum Nunc Aliquet Bibendum Enim Facilisis Gravida. Diam Phasellus Vestibulum Lorem Sed Risus Ultricies. Magna Sit Amet Purus Gravida Quis Blandit. Arcu Cursus Vitae Congue Mauris.</p><!-- /.about-one__text -->
                    </div><!-- /.about-one__description -->
                    <div class="about-one__inner wow fadeInUp" data-wow-duration="1500ms">
                        <ul class="about-one__info list-unstyled">
                            <li>
                                <span class="about-one__info__icon"><i class="icon-right-up"></i></span>
                                Expert Trainers
                            </li>
                            <li>
                                <span class="about-one__info__icon"><i class="icon-right-up"></i></span>
                                Online Remote Learning
                            </li>
                            <li>
                                <span class="about-one__info__icon"><i class="icon-right-up"></i></span>
                                Lifetime Access
                            </li>
                        </ul><!-- /.about-one__info list-unstyled -->
                        <div class="about-one__button">
                            <a href="about.html" class="about-one__btn eduhive-btn eduhive-btn--border">
                                <span>more About us</span>
                                <span class="eduhive-btn__icon">
                                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                </span>
                            </a><!-- /.eduhive-btn -->
                        </div><!-- /.about-one__button -->
                    </div><!-- /.about-one__inner -->
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
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
                        <div class="video-one__bg course-video" style="background-image: url(assets/frontend/images/courses/featured-course.jpg);">
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

<section class="testimonials-three section-space2" id="testimonials">
    <div class="testimonials-three__bg" style="background-image: url(assets/frontend/images/shapes/testimonials-bg-3-1.png);">
    </div><!-- /.testimonials-three__bg -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <h3 class="sec-title__title">List <span class="sec-title__title__text">of Top </span> <span class="sec-title__title__shape">Companies</span></h3><!-- /.sec-title__title -->
                    <p>Experience a journey of learning, growth, and career success. With hands-on training, expert guidance, and real-world exposure, we prepare you for a future full of opportunities.</p>
                </div><!-- /.sec-title -->
            </div>
            <div class="col-md-8">
                <ul class="recruiters ">
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
    <img src="assets/frontend/images/shapes/testimonial-shape-3-1.png" alt="shape" class="testimonials-three__shape-one">
    <img src="assets/frontend/images/shapes/testimonial-shape-3-2.png" alt="shape" class="testimonials-three__shape-two">
    <img src="assets/frontend/images/shapes/testimonial-shape-3-3.png" alt="shape" class="testimonials-three__shape-three">
</section><!-- /.testimonials-three section-space2 -->

<section class="faq-one section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-6">
                <div class="faq-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="sec-title__title">We Are Always Ensure <span class="sec-title__title__text">Best <br> Course</span> For <span class="sec-title__title__shape">Your Learning</span></h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="faq-one__accordion">
                        <div class="eduhive-accordion" data-grp-name="eduhive-accordion">
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms">
                                <div class="accordion-title">
                                    <h4>How long should a business plan be?</h4>
                                    <span class="accordion-title__icon">
                                        <i class="icon-double-arrow"></i>
                                    </span>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms">
                                <div class="accordion-title">
                                    <h4>What is included in your services?</h4>
                                    <span class="accordion-title__icon">
                                        <i class="icon-double-arrow"></i>
                                    </span>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages Lorem Ipsum but the majority have suffered alteration in some form, by injected humour.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms">
                                <div class="accordion-title">
                                    <h4>What type of company is measured?</h4>
                                    <span class="accordion-title__icon">
                                        <i class="icon-double-arrow"></i>
                                    </span>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Prior to joining company, she spent 20+ years at Inmosys, where he held a wide range of global leadership roles, from services to products.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                        </div><!-- /.faq-accordion -->
                    </div><!-- /.faq-one__accordion -->
                </div><!-- /.faq-one__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                <div class="faq-one__image">
                    <div class="faq-one__image__one">
                        <div class="faq-one__image__one__inner">
                            <img src="assets/frontend/images/faq/faq-1-1.png" alt="faq">
                        </div><!-- /.faq-one__image__one__inner -->
                        <img src="assets/frontend/images/shapes/faq-shape-1-2.png" alt="shape" class="faq-one__image__shape-one">
                        <img src="assets/frontend/images/shapes/faq-shape-1-3.png" alt="shape" class="faq-one__image__shape-two">
                        <img src="assets/frontend/images/shapes/faq-shape-1-5.png" alt="shape" class="faq-one__image__shape-three">
                        <div class="faq-one__image__shape-box"></div><!-- /.faq-one__image__shape-box -->
                    </div><!-- /.faq-one__image__one -->
                    <div class="faq-one__image__two">
                        <img src="assets/frontend/images/faq/faq-1-2.png" alt="faq">
                    </div><!-- /.faq-one__image__two -->
                </div><!-- /.faq-one__image -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
    <img src="assets/frontend/images/shapes/faq-shape-1-1.png" alt="shape" class="faq-one__shape-one">
    <img src="assets/frontend/images/shapes/faq-shape-1-4.png" alt="shape" class="faq-one__shape-two">
</section><!-- /.faq-one section-space -->

<section class="instructors-one section-space2" id="instructors">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h6 class="sec-title__tagline">our expert team</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">Our <span class="sec-title__title__text">expert</span> <span class="sec-title__title__shape">instructor</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="instructors-one__carousel eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 10,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "dots": true,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "autoplay": true,
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
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-1.jpg" alt="Mike Hardson">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">Mike Hardson</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">data scientist</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-2.jpg" alt="aleesha brown">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">aleesha brown</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">Web Developer</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-3.jpg" alt="david cooper">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">david cooper</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">software engineer</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-4.jpg" alt="sarah albert">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">sarah albert</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">UI/UX Designer</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-5.jpg" alt="kevin martin">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">kevin martin</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">App Developer</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-6.jpg" alt="christine eve">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">christine eve</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">SEO Expert</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-7.jpg" alt="Adlof Carone">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">Adlof Carone</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">UI/UX Designer</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="instructor-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="instructor-card__image">
                        <img src="assets/frontend/images/instructors/instructor-1-8.jpg" alt="Sabrina Melton">
                        <div class="instructor-card__hover">
                            <div class="instructor-card__info">
                                <div class="instructor-card__social">
                                    <span class="instructor-card__social__share">
                                        <i class="icon-share"></i>
                                    </span><!-- /.instructor-card__social__share -->
                                    <div class="instructor-card__social__list">
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://facebook.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Linkedin</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <span class="instructor-card__social__list__icon">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </span>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.instructor-card__social__list -->
                                </div><!-- /.instructor-card__social -->
                                <h3 class="instructor-card__name">
                                    <a href="instructor-details.html">Sabrina Melton</a>
                                </h3><!-- /.instructor-card__name -->
                                <h6 class="instructor-card__designation">Graphics Designer</h6><!-- /.instructor-card__designation -->
                            </div><!-- /.instructor-card__info -->
                        </div><!-- /.instructor-card__hover -->
                    </div><!-- /.instructor-card__image -->
                </div><!-- /.instructor-card -->
            </div><!-- /.item -->
        </div><!-- /.instructors-one__carousel -->
    </div><!-- /.container -->
    <img src="assets/frontend/images/shapes/instructors-shape-1-1.png" alt="shape" class="instructors-one__shape-one">
    <img src="assets/frontend/images/shapes/instructors-shape-1-2.png" alt="shape" class="instructors-one__shape-two">
    <div class="instructors-one__box-one"></div><!-- /.instructors-one__box-one -->
    <div class="instructors-one__box-two"></div><!-- /.instructors-one__box-two -->
</section><!-- /.instructors-one section-space2 -->

<section class="testimonials-one section-space" id="testimonials">
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
    <img src="assets/frontend/images/shapes/testimonials-shape-1-1.png" alt="shape" class="testimonials-one__shape">
    <div class="testimonials-one__shape-box"></div><!-- /.testimonials-one__shape-box -->
</section><!-- /.testimonials-one section-space -->

<section class="cta-one">
    <div class="container">
        <div class="cta-one__content wow fadeInUp" data-wow-duration="1500ms">
            <h2 class="cta-one__title">Get Your Quality Skills Certificate <br>
                Through Eduhive</h2><!-- /.cta-one__title -->
            <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
                <span>get started now</span>
                <span class="eduhive-btn__icon">
                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                </span>
            </a><!-- /.eduhive-btn -->
        </div><!-- /.cta-one__conten -->
    </div><!-- /.container -->
    <img src="assets/frontend/images/resources/cta-1-1.png" alt="shape" class="cta-one__image-one">
    <img src="assets/frontend/images/resources/cta-1-2.png" alt="shape" class="cta-one__image-two">
    <img src="assets/frontend/images/shapes/cta-shape-1-1.png" alt="shape" class="cta-one__shape-one">
    <img src="assets/frontend/images/shapes/cta-shape-1-1.png" alt="shape" class="cta-one__shape-two">
    <div class="cta-one__shape-box-one"></div><!-- /.cta-one__shape-box-one -->
    <div class="cta-one__shape-box-two wow fadeInRight" data-wow-duration="1500ms"></div><!-- /.cta-one__shape-box-two -->
</section><!-- /.cta-one -->

<section class="blog-one section-space" id="blog">
    <div class="container">
        <div class="blog-one__top">
            <div class="row gutter-y-50 align-items-center">
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-one__content">
                        <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <h6 class="sec-title__tagline">latest blog</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title"><span class="sec-title__title__shape">our latest</span> <span class="sec-title__title__text">blog news</span></h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div><!-- /.blog-one__content -->
                </div><!-- /.col-xl-9 col-lg-8 -->
                <div class="col-xl-3 col-lg-4">
                    <div class="blog-one__custome-navs"></div><!-- /.blog-one__custome-navs -->
                </div><!-- /.col-xl-3 col-lg-4 -->
            </div><!-- /.row gutter-y-50 align-items-center -->
        </div><!-- /.blog-one__top -->
        <div class="blog-one__carousel eduhive-owl__carousel owl-carousel owl-theme" data-owl-options='{
            "items": 1,
            "margin": 10,
            "loop": true,
            "smartSpeed": 700,
            "nav": true,
            "dots": false,
            "navContainer": ".blog-one__custome-navs",
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
            "autoplay": true,
            "responsive": {
                "0": {
                    "items": 1,
                    "margin": 10
                },
                "768": {
                    "items": 2,
                    "margin": 30
                },
                "992": {
                    "items": 3,
                    "margin": 30
                }
            }
        }'>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-1.jpg" alt="Talk About the Three Major Types of Floor Tiles">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Talk About the Three Major Types of Floor Tiles</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">29</span>
                            <span class="blog-card__date__month">jan</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">Talk About the Three Major Types of Floor Tiles</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-2.jpg" alt="Big Data. Are There Any Leftovers In The Kitchen">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Big Data. Are There Any Leftovers In The Kitchen</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">25</span>
                            <span class="blog-card__date__month">june</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">Big Data. Are There Any Leftovers In The Kitchen</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-3.jpg" alt="A Simple Lift And Shift Job Going Forward Price">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">A Simple Lift And Shift Job Going Forward Price</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">20</span>
                            <span class="blog-card__date__month">jan</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">A Simple Lift And Shift Job Going Forward Price</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-4.jpg" alt="My Capacity Is Full We're Building The Plane">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">My Capacity Is Full We're Building The Plane</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">15</span>
                            <span class="blog-card__date__month">jul</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">My Capacity Is Full We're Building The Plane</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-5.jpg" alt="Ny Leftovers In The Kitchen Touch Base">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Ny Leftovers In The Kitchen Touch Base</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">5</span>
                            <span class="blog-card__date__month">june</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">Ny Leftovers In The Kitchen Touch Base</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-6.jpg" alt="Circle Back, If You Want To Motivate These">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Circle Back, If You Want To Motivate These</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">28</span>
                            <span class="blog-card__date__month">jul</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">Circle Back, If You Want To Motivate These</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-7.jpg" alt="Nail Jelly To The Hothouse Wall Pixel Pushing">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Nail Jelly To The Hothouse Wall Pixel Pushing</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">10</span>
                            <span class="blog-card__date__month">june</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">Nail Jelly To The Hothouse Wall Pixel Pushing</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-8.jpg" alt="Copy And Paste From Stack Overflow Can You">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Copy And Paste From Stack Overflow Can You</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">2</span>
                            <span class="blog-card__date__month">jan</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">Copy And Paste From Stack Overflow Can You</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card__image">
                        <img src="assets/frontend/images/blog/blog-1-9.jpg" alt="Catching And Not Too Giant, Yet Drink From The">
                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Catching And Not Too Giant, Yet Drink From The</span>
                            <!-- /.sr-only --></a>
                        <div class="blog-card__date">
                            <span class="blog-card__date__day">26</span>
                            <span class="blog-card__date__month">june</span>
                        </div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    by Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="blog-card__meta__icon">
                                        <i class="icon-comments"></i>
                                    </span>
                                    2 Comments
                                </a>
                            </li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details-right.html">Catching And Not Too Giant, Yet Drink From The</a></h3><!-- /.blog-card__title -->
                        <a href="blog-details-right.html" class="blog-card__link">
                            read More
                            <span class="blog-card__link__icon">
                                <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                            </span>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
        </div><!-- /.blog-one__carousel -->
    </div><!-- /.container -->
    <img src="assets/frontend/images/shapes/blog-shape-1-1.png" alt="shape" class="blog-one__shape-one">
    <img src="assets/frontend/images/shapes/blog-shape-1-2.png" alt="shape" class="blog-one__shape-two">
</section><!-- /.blog-one section-space -->

@endsection
