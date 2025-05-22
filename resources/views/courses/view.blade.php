@extends('layouts.main')
    @section('content')
        <section class="page-header">
            <div class="container">
                <div class="page-header__content">
                    <ul class="eduhive-breadcrumb list-unstyled">
                        <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="index.html">Home</a></li>
                        <li><span>Our Courses</span></li>
                        <li><span>{{ $contentMain->name }}</span></li>
                    </ul>
                    <h1 class="page-header__title mb-3">{{ $contentMain->name }}</h1>
                    <h3 class="page-header__subtitle">{{ $contentMain->excerpt }}</h1>
                    <div class="course-details__info-wrapper">
                        <div class="course-details__class">
                            <span class="course-details__class__icon">
                                <i class="icon-video"></i>
                            </span><!-- /.course-details__class__icon -->
                            <p class="course-details__class__text">{{ $contentMain->number_of_enrolled }} Enrolled</p><!-- /.course-details__class__text -->
                        </div><!-- /.course-details__class -->
                        <div class="course-details__review">
                            <span class="course-details__review__icon">
                                <i class="icon-star"></i>
                            </span><!-- /.course-details__review__icon -->
                            <p class="course-details__review__text"><span>3.4</span> <span>(1{{ $contentMain->no_of_rating }} Review)</span></p><!-- /.course-details__review__text -->
                        </div><!-- /.course-details__review -->
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="course_highlights">
                                {!! $contentMain->highlights !!}
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <img src="{{ url('/assets/frontend/images/shapes/page-header-shape-1.png') }}" alt="shape" class="page-header__shape-one">
            <img src="{{ url('/assets/frontend/images/shapes/page-header-shape-2.png') }}" alt="shape" class="page-header__shape-two">
            <div class="page-header__shape-three"></div>
            <div class="page-header__shape-four"></div>
        </section>
        <section class="course-details ">
            <div class="container position-relative">
                <div class="course-video-section">
                    <div class="row">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-4">
                            <div class="course-details__image">
                                <img src="{{ url('/assets/frontend/images/courses/course-d-1-2.jpg')}}" alt="The Complete Data Science Course">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__video-btn video-btn video-popup">
                                    <i class="icon-play"></i>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a><!-- /.course-details__video-btn -->
                                <span class="course-details__category">Technology</span><!-- /.course-details__category -->
                            </div><!-- /.course-details__image -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-xl-8 col-lg-7">
                        <div class="course-details__inner">
                            
                            <div class="course-details__main-tab-box tabs-box">
                                <ul class="tab-buttons">
                                    <li data-tab="#overview" class="tab-btn active-btn">overview</li>
                                    <li data-tab="#curriculum" class="tab-btn">curriculum</li>
                                    <li data-tab="#tools" class="tab-btn">Practical Tools</li>
                                </ul><!-- /.tab-buttons -->
                                <div class="tabs-content">
                                    <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="overview" style="display: block;">
                                        <div class="couse_description">
                                            {!! $contentMain->description !!}
                                        </div>
                                    </div><!-- /.overview-tab -->
                                    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="curriculum" style="display: none;">
                                        <div class="course-details__accordion">
                                            <div class="eduhive-accordion" data-grp-name="eduhive-accordion">
                                                @foreach(getSubjectsByCourseId($contentMain->subjects) as $key => $subject)
                                                <div class="accordion {{ ($key == 0 )?'active':'' }}">
                                                    <div class="accordion-title">
                                                        <h4>{{ $subject->name }} </h4>
                                                        <span class="accordion-time__duration"> {{ $subject->duration }} </span>
                                                        <span class="accordion-title__icon"></span>
                                                    </div><!-- /.accordion-title -->
                                                    <div class="accordion-content">
                                                        <div class="inner">
                                                            <div class="course-details__accordion__inner">
                                                                @foreach(getSubjectsBySubjectId($subject->id) as $topic)
                                                                <a href="javascript:void(0);" class="course-details__accordion__class">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        {{ $topic->name }}
                                                                    </span>
                                                                </a>
                                                                @endforeach
                                                            </div>
                                                        </div><!-- /.inner -->
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                            </div><!-- /.faq-accordion -->
                                        </div><!-- /.course-details__accordion -->
                                    </div><!-- /.curriculum-tab -->
                                    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="tools" style="display: none;">
                                        <div class="practical_tools">
                                            <h2>Practical Training</h2>
                                            @foreach($tools as $value )
                                                <a href="javascript:void(0)" class="m-2">
                                                    <img src="{{ url('/public/tools/'.$value) }}" alt="{{ $value }}" class="width-100">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div><!-- /.reviews-tab -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.course-details__main-tab-box -->
                        </div><!-- /.course-details__inner -->
                    </div>
                    <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="course-details__info">
                            <h3 class="course-details__info__title">Course includes:</h3><!-- /.course-details__info__title -->
                            <ul class="course-details__info__list list-unstyled">
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-ranking"></i></span>
                                            Level:
                                        </div>
                                        <span>Expert</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-clock-1"></i></span>
                                            Duration:
                                        </div>
                                        <span>{{ $contentMain->duration }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-graduation"></i></span>
                                            Lessons:
                                        </div>
                                        <span>{{ $contentMain->no_of_module }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-multiple-users"></i></span>
                                            Students:
                                        </div>
                                        <span>{{ $contentMain->number_of_enrolled }}</span>
                                    </div><!-- /.course-details__info__text -->
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-medal"></i></span>
                                            Certifications:
                                        </div>
                                        <span>Yes</span>
                                    </div><!-- /.course-details__info__text -->
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-globe"></i></span>
                                            Language:
                                        </div>
                                        <span>English</span>
                                    </div><!-- /.course-details__info__text -->
                                </li>
                            </ul><!-- /.course-details__info__list -->
                            <a href="contact.html" class="course-details__info__btn eduhive-btn">
                                <span class="eduhive-btn__text">Join This course</span>
                                <span class="eduhive-btn__icon">
                                    <span class="eduhive-btn__icon__inner"><i class="icon-arrow-right"></i></span>
                                </span>
                            </a><!-- /.eduhive-btn -->
                            
                            <div class="course-details__social">
                                <h3 class="course-details__social__title">Share:</h3><!-- /.course-details__social__title -->
                                <div class="course-details__social__group social-links-two">
                                    <a href="https://facebook.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                    <a href="https://youtube.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                </div><!-- /.course-details__social__group -->
                            </div><!-- /.course-details__social -->
                        </div><!-- /.course-details__info -->
                    </div><!-- /.col-xl-4 col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details section-space -->
        <section class="about-three mt-3" id="about">
            <div class="container-fluid">
                <div class="about-three__inner section-space">
                    <div class="container">
                        <div class="row gutter-y-50 align-items-center">
                            <div class="col-lg-6 wow fadeInLeft animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInLeft;">
                                <div class="about-three__image">
                                    <div class="about-three__image__inner">
                                        <img src="{{ url('/assets/frontend/images/courses/certification.webp')}}" alt="about">
                                        <div class="about-three__experience">
                                            <span class="about-three__experience__icon">
                                                <i class="icon-connectibity"></i>
                                            </span><!-- /.about-three__experience__icon -->
                                            <div class="about-three__experience__content">
                                                <h3 class="about-three__experience__title">25+</h3><!-- /.experience__title -->
                                                <p class="about-three__experience__text">Years of experience</p><!-- /.experience__text -->
                                            </div><!-- /.about-three__experience__content -->
                                        </div><!-- /.about-three__experience -->
                                        
                                        <div class="about-three__image__shape-one"></div><!-- /.about-three__image__shape-one -->
                                        <div class="about-three__image__shape-two"></div><!-- /.about-three__image__shape-two -->
                                    </div><!-- /.about-three__image__inner -->
                                    <div class="about-three__image__box"></div><!-- /.about-three__image__box -->
                                    <img src="{{ url('/assets/frontend/images/shapes/about-shape-3-2.png')}}" alt="shape" class="about-three__image__shape-three">
                                </div><!-- /.about-three__image -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="about-three__content">
                                    <div class="sec-title wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                        <h6 class="sec-title__tagline">global certifiate</h6><!-- /.sec-title__tagline -->
                                        <h3 class="sec-title__title">Our <span class="sec-title__title__text">Certificate</span> Google <span class="sec-title__title__shape">Verified</span></h3><!-- /.sec-title__title -->
                                    </div><!-- /.sec-title -->
                                    <div class="about-three__description wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                        <p class="about-three__text">Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the.</p><!-- /.about-three__text -->
                                    </div><!-- /.about-three__description -->
                                    
                                    <div class="about-three__bottom wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                                        <a href="about.html" class="eduhive-btn">
                                            <span>Register Now</span>
                                            <span class="eduhive-btn__icon">
                                                <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                            </span>
                                        </a><!-- /.eduhive-btn -->
                                        <div class="about-three__call">
                                            <span class="about-three__call__icon">
                                                <i class="icon-telephone"></i>
                                            </span><!-- /.about-three__call__icon -->
                                            <div class="about-three__call__content">
                                                <p class="about-three__call__title">Know More</p><!-- /.call__title -->
                                                <h4 class="about-three__call__number">
                                                    <a href="tel:+208-555-0112">+208-555-0112</a>
                                                </h4><!-- /.about-three__call__number -->
                                            </div><!-- /.about-three__call__content -->
                                        </div><!-- /.about-three__call -->
                                    </div><!-- /.about-three__bottom -->
                                </div><!-- /.about-three__content -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row gutter-y-50 -->
                    </div><!-- /.container -->
                    <img src="{{ url('/assets/frontend/images/shapes/about-shape-3-1.png')}}" alt="shape" class="about-three__shape-one">
                    <div class="about-three__circle-one"></div><!-- /.about-three__circle-one -->
                    <div class="about-three__circle-two"></div><!-- /.about-three__circle-two -->
                    <div class="about-three__circle-three"></div><!-- /.about-three__circle-three -->
                </div><!-- /.about-three__inner section-space -->
            </div><!-- /.container-fluid -->
            <img src="{{ url('/assets/frontend/images/shapes/about-shape-3-3.png')}}" alt="shape" class="about-three__shape-two">
        </section>
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
            </div><!-- /.container -->
            <div class="course-category__shape-one"></div><!-- /.course-category__shape-one -->
            <div class="course-category__shape-two"></div><!-- /.course-category__shape-two -->
        </section><!-- /.course-category section-space -->
        <section class="courses-four">
            <div class="container">
                <div class="courses-four__top">
                    <div class="row gutter-y-50 align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h6 class="sec-title__tagline">our courses</h6><!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title"><span>Our</span> <span class="sec-title__title__shape">Most</span> <span>Popular</span> <span class="sec-title__title__text">Courses</span></h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                        </div><!-- /.col-xl-9 col-lg-8 -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="courses-four__custome-navs"></div><!-- /.courses-four__custome-navs -->
                        </div><!-- /.col-xl-3 col-lg-4 -->
                    </div><!-- /.row gutter-y-40 -->
                </div><!-- /.courses-four__top -->
                <div class="courses-four__carousel eduhive-owl__carousel eduhive-owl__carousel--with-shadow eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 1,
                    "margin": 10,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": false,
                    "dots": false,
                    "navContainer": ".courses-four__custome-navs",
                    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                    "autoplay": true,
                    "responsive": {
                        "0": {
                            "items": 1,
                            "nav": true,
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
                </div><!-- /.courses-four__carousel -->
            </div>
        </section>
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
    @endsection 