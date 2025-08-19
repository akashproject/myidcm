@extends('layouts.main')
    @section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-header__content">
                <ul class="eduhive-breadcrumb list-unstyled">
                    <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="{{ url('/') }}">Home</a></li>
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
                        <p class="course-details__review__text"><span>4.7</span> <span>({{ $contentMain->number_of_rating }} Review)</span></p><!-- /.course-details__review__text -->
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
        <img src="{{ url('/assets/frontend/images/shapes/page-header-shape-2.png') }}" alt="shape" class="page-header__shape-two">
        <div class="page-header__shape-three"></div>
        <div class="page-header__shape-four"></div>
    </section>

    <section class="course-details ">
        <div class="container">
            <div class="row gutter-y-40">
                <div class="col-xl-8 col-lg-7">
                    <div class="course-details__inner">
                        <div class="course-details__main-tab-box tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#overview" class="tab-btn active-btn">overview</li>
                                <li data-tab="#syllabus" class="tab-btn">Syllabus</li>
                                <li data-tab="#tools" class="tab-btn">Practical Tools</li>
                            </ul><!-- /.tab-buttons -->

                            <div class="tabs-content">

                                <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="overview" style="display: block;">

                                    <div class="couse_description">
                                        {!! $contentMain->description !!}
                                    </div>
                                </div><!-- /.overview-tab -->
                                <div class="tab fadeInUp animated" data-wow-delay="200ms" id="syllabus" style="display: none;">
                                    <div class="course-details__accordion">
                                        <div class="eduhive-accordion" data-grp-name="eduhive-accordion">
                                            @foreach(getSubjectsByCourseId($contentMain->subjects) as $key => $subject)
                                            <div class="accordion {{ ($key == 0 )?'active':'' }}">
                                                <div class="accordion-title">
                                                    <div class="heading">
                                                        <h4>{{ $subject->name }} </h4>
                                                        <span class="accordion-time__duration"> {{ $subject->duration }} </span>
                                                    </div>
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
                                </div><!-- /.syllabus-tab -->
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
                <div class="col-xl-4 col-lg-5 wow fadeInUp sticky-course" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="course-details__image">
                        <img src="{{ url('assets/frontend/images/courses/videos/'.$contentMain->slug.'.jpg')}}" alt="The Complete Data Science Course">
                        <a href="{{ $contentMain->course_video_link }}" class="course-details__video-btn video-btn video-popup">
                            <i class="icon-play"></i>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a><!-- /.course-details__video-btn -->
                    </div><!-- /.course-details__image -->
                    <div class="course-details__info d-none d-lg-block" data-sticky>
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

                        <a href="#lead-generate-popup" class="course-details__info__btn eduhive-btn open-popup-link">

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
                                    <h6 class="sec-title__tagline">Certification</h6><!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title">Certificate of</span> <span class="sec-title__title__text"><span class="sec-title__title__shape">Completion</span></span></h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <div class="about-three__description wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                    <p class="about-three__text">You can gain this certificate after the completion of this advanced diploma in a digital marketing course. Thus, it can boost your career to the next big level.</p><!-- /.about-three__text -->
                                </div><!-- /.about-three__description -->

                                <div class="about-three__bottom wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                                    <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
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
                                                <a href="tel:+918335011110">+918335011110</a>
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
                <h6 class="sec-title__tagline">Job Opportunities</h6><!-- /.sec-title__tagline -->
                <h3 class="sec-title__title">Different <span class="sec-title__title__text"><span class="sec-title__title__shape">Digital Marketing Job Roles</span></span></h3><!-- /.sec-title__title -->
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

    @include('common.courses-inner')
    <section class="all-placed-student section-space">
        <div class="container">
            <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <h3 class="sec-title__title">Students' <span class="sec-title__title__text"><span class="sec-title__title__shape">Placement Stories</span></span></h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row">
                @foreach(getPlacements(6) as $placement)
                    <div class="col-md-4"> 
                        <div class="placed-student-container my-2">
                            <div class="placed-student-content text-white margin-20px-right">
                                <h6 class="margin-10px-bottom"> <strong>{{$placement->name }}</strong> </h6>
                                <p> Designation: <strong>{{ $placement->dasignation}}</strong></p>
                                <p> Placed At: <strong>{{ $placement->placed_at}}</strong></p>
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
                        <span>View More Placements</span>
                        <span class="eduhive-btn__icon">
                            <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
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
        <img src="/assets/frontend/images/resources/cta-1-1.webp" alt="shape" class="cta-one__image-one">
        <img src="/assets/frontend/images/resources/cta-1-2.png" alt="shape" class="cta-one__image-two">
        <img src="/assets/frontend/images/shapes/cta-shape-1-1.png" alt="shape" class="cta-one__shape-one">
        <img src="/assets/frontend/images/shapes/cta-shape-1-1.png" alt="shape" class="cta-one__shape-two">
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
                            <h3 class="sec-title__title">Pick <span class="sec-title__title__text"><span class="sec-title__title__shape">on IDCM</span></span></h3><!-- /.sec-title__title -->
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
                                            <div class="testimonial-card__quote">
                                                {!! $testimonial->comment !!}
                                            </div><!-- /.testimonial-card__quote -->
                                            <div class="eduhive-ratings">
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
                                            </div><!-- /.product-ratings -->
                                        </div><!-- /.testimonial-card__content -->
                                    </div><!-- /.testimonial-card -->
                                </div><!-- /.owl-slide-item-->
                            @endforeach
                        </div><!-- /.testimonials-one__carousel -->
                    </div><!-- /.eduhive-stretch-element-inside-column -->
                </div><!-- /.col-xl-8 -->
            </div><!-- /.row gutter-y-50 -->
        </div>
        <img src="/assets/frontend/images/shapes/testimonials-shape-1-1.png" alt="shape" class="testimonials-one__shape">
        <div class="testimonials-one__shape-box"></div><!-- /.testimonials-one__shape-box -->
    </section><!-- /.testimonials-one section-space -->

    @if(getBlogs($contentMain->blog))
    <section class="blog-one section-space" id="blog">
        <div class="container">
            <div class="blog-one__top">
                <div class="row gutter-y-50 align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog-one__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h6 class="sec-title__tagline">Knowledge Center</h6><!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title">Related <span class="sec-title__title__text"><span class="sec-title__title__shape">Educational Topics</span></span></h3><!-- /.sec-title__title -->
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

            

            @foreach(getBlogs($contentMain->blog) as $value)
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                        <div class="blog-card__image">
                            <img src="{{ $value->source_url }}" alt="{!! $value->title->rendered !!}">
                            <a href="{{ $value->link }}" class="blog-card__image__link">
                                <span class="sr-only">{!! $value->title->rendered !!}</span>
                                <!-- /.sr-only -->
                            </a>
                            <div class="blog-card__date">
                                <span class="blog-card__date__day">{{ date("d",strtotime($value->date))}}</span>
                                <span class="blog-card__date__month">{{ date("M",strtotime($value->date))}}</span>
                            </div><!-- /.blog-card__date -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <ul class="list-unstyled blog-card__meta">
                                <li>
                                    <a href="{{ $value->author->link }}">
                                        <span class="blog-card__meta__icon">
                                            <i class="far fa-user"></i>
                                        </span>
                                        by {{ $value->author->name }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="blog-card__meta__icon">
                                            <i class="icon-date"></i>
                                        </span>
                                        {{ date('M d, Y',strtotime($value->date)) }}
                                    </a>
                                </li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="{{ $value->link }}">{!! $value->title->rendered !!}</a></h3><!-- /.blog-card__title -->
                            <a href="{{ $value->link }}" class="blog-card__link">
                                read More
                                <span class="blog-card__link__icon">
                                    <span class="blog-card__link__icon__inner"><i class="icon-arrow-right"></i></span>
                                </span>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
            @endforeach
        </div><!-- /.container -->
        <img src="/assets/frontend/images/shapes/blog-shape-1-1.png" alt="shape" class="blog-one__shape-one">
        <img src="/assets/frontend/images/shapes/blog-shape-1-2.png" alt="shape" class="blog-one__shape-two">
    </section><!-- /.blog-one section-space -->
    @endif

    <div class="course-bar d-lg-none d-block">
        <p>Book An Appointment</p>
        <div class="d-block d-lg-none">
            <a href="#lead-generate-popup" class="btn btn-contact open-popup-link">Book An Appointment</a>
        </div>
    </div>
    
    <section class="faq-one my-5">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-lg-12">
                    <div class="faq-one__content">
                        <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <h6 class="sec-title__tagline">Frequently Asked Questions</h6><!-- /.sec-title__tagline -->
                            <!--h3 class="sec-title__title">We Are Always Ensure <span class="sec-title__title__text">Best <br> Course</span> For <span class="sec-title__title__shape">Your Learning</span></h3><!-- /.sec-title__title -->
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