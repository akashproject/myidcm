@extends('layouts.main')
@section('content')
<section class="main-slider-two" id="home">
    <div class="active">
        <div class="main-slider-two__item">
            <div class="main-slider-two__bg" style="background-image: url({{ url('/assets/frontend/images/shapes/main-slider-bg-2-1.png') }});"></div><!-- /.main-slider-two__bg -->
            <div class="container">
                <div class="row gutter-y-60 align-items-center">
                    <div class="main-slider-two__col-content">
                        <ul class="eduhive-breadcrumb list-unstyled">
                            <li><span class="eduhive-breadcrumb__icon">
                                <i class="icon-home"></i></span><a href="https://www.myidcm.com">Home</a></li>
                            <li><span><a href="https://www.myidcm.com/institutes">Institutes</a></span></li>
                            <li><span>{{$contentMain->name}}</span></li>
                        </ul>
                        <div class="main-slider-two__content">
                            <div class="main-slider-two__top">
                                <p class="main-slider-two__sub-title">No more boring lectures.</p><!-- /.sub-title -->
                            </div><!-- /.main-slider-two__top -->
                            <h2 class="main-slider-two__title" style="font-size: 42px!important;">
                                <span class="main-slider-two__title__inner"><span class="main-slider-two__title__text">Digital Marketing Institute</span> <br> {{$contentMain->name}} </span>
                            </h2><!-- /.title -->
                            <div class="main-slider-two__description institute_highlights">
                                {!! $contentMain->highlights !!}
                                <!-- <p class="main-slider-two__text" style="color: #333;line-height: 1.5rem;">{{ substr(strip_tags($contentMain->excerpt), 0, 400); }}</p>  -->
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
                                    <a href="#lead-generate-popup" class="main-slider-two__btn-2 eduhive-btn eduhive-btn--border open-popup-link">
                                        <span>Book An Appointment</span>
                                        <span class="eduhive-btn__icon">
                                            <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                        </span>
                                    </a><!-- /.eduhive-btn -->
                                </div><!-- /.main-slider-two__button__inner -->

                                <div class="main-slider-two__button__inner">
                                    <a href="#institute-location" class="main-slider-two__btn-1 eduhive-btn">
                                        <span>Our Location</span>
                                        <span class="eduhive-btn__icon">
                                            <span class="eduhive-btn__icon__inner"><i class="icon-location"></i></span>
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
                                    <a href="https://www.youtube.com/watch?v=XkL141uDM1A" class="main-slider-two__video-btn video-btn video-popup">
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
                                            <span class="count-text" data-stop="8" data-speed="8">0</span><span>K+</span>
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

@include('common.featuredCourse')

@include('common.courses')

<section class="online-class section-space-bottom">
    <div class="online-class__inner">
        <div class="online-class__inner__bg" style="background-image: url(/assets/frontend/images/shapes/online-class-bg-1-1.png);">
        </div><!-- /.online-class__inner__bg -->
    </div><!-- /.online-class__inner -->
    <div class="container">
        <div class="online-class__content">
            <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <h6 class="sec-title__tagline">Class Modes</h6><!-- /.sec-title__tagline -->
                <h3 class="sec-title__title"><span>Your learning</span> <span class="sec-title__title__shape"> <span class="sec-title__title__text">Your choice</span></span></h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="online-class__description wow fadeInUp" data-wow-duration="1500ms">
                <p class="online-class__text">Traditional in-person classes in campus with face to face interaction and real-time virtual classes using video conferencing tool are offered to you as per your convenience.</p><!-- /.online-class__text -->
            </div><!-- /.online-class__description -->
            <div class="online-class__class-wrapper">
                <div class="online-class__class wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="online-class__class__icon online-class__class__icon--audio">
                        <span class="online-class__class__icon__inner">
                            <i class="icon-speaker-filled-audio-tool"></i>
                        </span>
                    </div><!-- /.online-class__class__icon -->
                    <h4 class="online-class__class__title">Offline Classes</h4><!-- /.online-class__class__title -->
                </div><!-- /.online-class__class -->
                <div class="online-class__class wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="online-class__class__icon online-class__class__icon--live">
                        <span class="online-class__class__icon__inner">
                            <i class="icon-live-streaming"></i>
                        </span>
                    </div><!-- /.online-class__class__icon -->
                    <h4 class="online-class__class__title">Online Classes</h4><!-- /.online-class__class__title -->
                </div><!-- /.online-class__class -->
            </div><!-- /.online-class__class-wrapper -->
        </div><!-- /.online-class__content -->
    </div><!-- /.container -->
    <div class="online-class__shape"></div><!-- /.online-class__shape -->
    <div class="online-class__box"></div><!-- /.online-class__box -->
</section><!-- /.online-class section-space-bottom -->

<section class="section-space ">
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


@if(!empty($galleryImg))
<section class="gallery-page my-5">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span class="sec-title__title__shape"><span class="sec-title__title__text">Events</span> <span>and</span> <span class="sec-title__title__text">Activities</span></span></h3><!-- /.sec-title__title -->
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


<section class="all-placed-student section-space">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Students'</span> <span class="sec-title__title__shape"><span class="sec-title__title__text">Placement Stories</span></span></h3><!-- /.sec-title__title -->
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
                    <span>View More Placements</span>
                    <span class="eduhive-btn__icon">
                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <img src="/assets/frontend/images/shapes/instructors-shape-1-1.png" alt="shape" class="instructors-one__shape-one">
    <img src="/assets/frontend/images/shapes/instructors-shape-1-2.png" alt="shape" class="instructors-one__shape-two">
    <div class="instructors-one__box-two"></div><!-- /.instructors-one__box-two -->
</section>

<section class="testimonials-one section-space" id="testimonials">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-xl-4">
                <div class="testimonials-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">Students' Experiences</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">Pick <span class="sec-title__title__shape"><span class="sec-title__title__text">On IDCM</span></span></h3><!-- /.sec-title__title -->
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

<section class="cta-one section-space">
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

<section class="section-space" id="institute-location">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Our Institute's</span> <span class="sec-title__title__shape"> <span class="sec-title__title__text">Location</span></span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="row gutter-y-40">
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="contact-page__content">
                    <div class="contact-page__content__bg" style="background-image: url(/assets/frontend/images/shapes/contact-form-bg-1-1.png);"></div>
                    <!-- /.contact-page__content__bg -->
                    <div class="contact-page__content__image">
                        <img src="{{ url('assets/frontend/images/resources/contact-1-1.png')}}" alt="contact">
                    </div><!-- /.contact-page__content__image -->
                    <div class="contact-page__content__inner">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline">get in touch</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">just say <span>hello!</span></h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <ul class="list-unstyled contact-page__info">
                            <li>
                                <div class="contact-page__info__icon">
                                    <span class="contact-page__info__icon__inner">
                                        <i class="icon-telephone"></i>
                                    </span><!-- /.contact-page__info__icon__inner -->
                                </div><!-- /.contact-page__info__icon -->
                                <div class="contact-page__info__content">
                                    <h3 class="contact-page__info__title">call now</h3>
                                    <a href="tel:{{ $contentMain->mobile }}" class="contact-page__info__text">+91 {{ $contentMain->mobile }}</a>
                                </div><!-- /.contact-page__info__content -->
                            </li>
                            <li>
                                <div class="contact-page__info__icon">
                                    <span class="contact-page__info__icon__inner">
                                        <i class="icon-paper-plane"></i>
                                    </span><!-- /.contact-page__info__icon__inner -->
                                </div><!-- /.contact-page__info__icon -->
                                <div class="contact-page__info__content">
                                    <h3 class="contact-page__info__title">Email</h3>
                                    <a href="mailto:{{ $contentMain->email }}" class="contact-page__info__text contact-page__info__text--email">{{ $contentMain->email }}</a>
                                </div><!-- /.contact-page__info__content -->
                            </li>
                            <li>
                                <div class="contact-page__info__icon">
                                    <span class="contact-page__info__icon__inner">
                                        <i class="icon-location"></i>
                                    </span><!-- /.contact-page__info__icon__inner -->
                                </div><!-- /.contact-page__info__icon -->
                                <div class="contact-page__info__content">
                                    <h3 class="contact-page__info__title">address</h3>
                                    <a href="https://www.google.com/maps" class="contact-page__info__text">{{ $contentMain->address }}</a>
                                </div><!-- /.contact-page__info__content -->
                            </li>
                        </ul><!-- /.list-unstyled -->
                        
                    </div><!-- /.contact-page__content__inner -->
                </div><!-- /.contact-page__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div>
                    {!! $contentMain->gmap_location !!}
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
                            <span class="eduhive-btn__icon">
                                <span class="eduhive-btn__icon__inner" style="font-size:24px"><i class="icon-date"></i></span>
                            </span>
                            <span>Book A Visit</span>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row gutter-y-40 -->
    </div><!-- /.container -->
</section><!-- /.contact-page section-space -->

@if($contentMain->faqs != null)
<section class="faq-one my-5">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-12">
                <div class="faq-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">Frequently Asked Questions</h6><!-- /.sec-title__tagline -->
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