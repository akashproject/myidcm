@extends('layouts.main')
@section('content')
<section class="page-header">
    <div class="container">
        <div class="page-header__content">
            <div class="row">
                <div class="col-md-8">
                    <ul class="eduhive-breadcrumb list-unstyled">
                        <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="index.html">Home</a></li>
                        <li><span>{{ $contentMain->name }}</span></li>
                    </ul><!-- /.eduhive-breadcrumb list-unstyled -->
                    <h2 class="page-header__title mb-3">{{ $contentMain->name }}</h2>
                    <h6>{!! $contentMain->description !!}</h2>
                </div>
            </div>
            
        </div><!-- /.page-header__content -->
    </div><!-- /.container -->
    <img src="assets/frontend/images/shapes/page-header-shape-1.png" alt="shape" class="page-header__shape-one">
    <img src="assets/frontend/images/shapes/page-header-shape-2.png" alt="shape" class="page-header__shape-two">
    <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
    <div class="page-header__shape-four"></div><!-- /.page-header__shape-four -->
</section><!-- /.page-header -->

<section class="testimonials-three section-space2" id="testimonials">
    <div class="testimonials-three__bg" style="background-image: url(assets/frontend/images/shapes/testimonials-bg-3-1.webp);">
    </div><!-- /.testimonials-three__bg -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <h3 class="sec-title__title">Our </span> <span class="sec-title__title__text"><span class="sec-title__title__shape">Top Recruiters</span></span></h3><!-- /.sec-title__title -->
                    <p>We connect you with top companies, and our dedicated placement assistance helps you land your dream job in the digital marketing industry. Our strong ties with leading recruiters ensure IDCM Alumni are highly sought after for cutting-edge job roles.</p>
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

<section class="all-placed-student my-5">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Meet Our</span> <span class="sec-title__title__shape sec-title__title__text"> Stars</span></h3><!-- /.sec-title__title -->
            <h5> From Dreaming to Achieving </h5>
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
</section>

<section class="faq-one faq-one--home my-5">
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
                                <span class="funfact-one__icon__inner"><i class="icon-batch-assign "></i></span>
                            </div><!-- /.funfact-one__icon -->
                            <h3 class="funfact-one__title count-box">
                                <span class="count-text" data-stop="30" data-speed="1500">0</span>
                                <span>+</span>
                            </h3><!-- /.funfact-one__title -->
                            <p class="funfact-one__text">Placement Offices</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__item -->
                        <div class="funfact-one__item funfact-one__item--secondary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="funfact-one__icon">
                                <span class="funfact-one__icon__inner"><i class="icon-connectibity"></i></span>
                            </div><!-- /.funfact-one__icon -->
                            <h3 class="funfact-one__title count-box">
                                <span class="count-text" data-stop="70" data-speed="1500">0</span>
                                <span>K+</span>
                            </h3><!-- /.funfact-one__title -->
                            <p class="funfact-one__text">Registered Employers</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__item -->
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

<section class="testimonials-one my-5" id="testimonials">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-xl-4">
                <div class="testimonials-one__content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h6 class="sec-title__tagline">Students' Experiences</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">Pick <span class="sec-title__title__text"><span class="sec-title__title__shape">On Idcm</span></span></h3><!-- /.sec-title__title -->
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

<section class="all-placed-student my-5">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Students'</span> <span class="sec-title__title__shape sec-title__title__text"> Career Launchpad</span></h3><!-- /.sec-title__title -->
            <h5> How IDCM Students are always well ahead of the competitions </h5>
        </div><!-- /.sec-title -->
        <div class="row my-5">
            <div class="col-md-5">
                <div class="testimonials-two__image">
                    <div class="testimonials-two__image__shape"></div><!-- /.testimonials-two__image__shape -->
                    <div class="testimonials-two__image__inner">
                        <img src="{{ url('assets/frontend/images/placements/placement-1.jpg') }}" alt="testimonial">
                    </div><!-- /.testimonials-two__image__inner -->
                </div>
            </div>
            <div class="col-md-7">
                <h3 class="sec-title__title">PPT  <span class="sec-title__title__text">Presentations</span></h3>
                <p class="about-two__text">
                    At our institute, students give a PPT Presentation after completing every module.This activity is very useful for many reasons:
                </p>
                <div class="about-two__row row">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Revise the topic and strengthen their understanding</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Improve public speaking and presentation skills</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Connect classroom learning with real-world examples</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Learn to explain ideas clearly and confidently</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                </div><!-- /.about-two__row row -->
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-7">
                <h3 class="sec-title__title">Content Marketing <span class="sec-title__title__text">Assignments</span></h3>
                <p class="about-two__text">
                    We give students Content Marketing Assignments to write blogs, create social media posts and reels, and design graphics using AI tools. This activity is useful because:
                </p>
                <div class="about-two__row row">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Practice blog writing, designing, and video editing</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Learn AI tools used in the digital industry</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Create content pieces for resumes and interviews</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Gain skills needed for jobs, freelancing, or personal branding</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                </div><!-- /.about-two__row row -->
            </div>
            <div class="col-md-5">
                <div class="testimonials-two__image mirror">
                    <div class="testimonials-two__image__shape"></div><!-- /.testimonials-two__image__shape -->
                    <div class="testimonials-two__image__inner">
                        <img src="{{ url('assets/frontend/images/placements/placement-2.jpg') }}" alt="testimonial">
                    </div><!-- /.testimonials-two__image__inner -->
                </div>
            </div>      
        </div>
        <div class="row my-5">          
            <div class="col-md-5">
                <div class="testimonials-two__image">
                    <div class="testimonials-two__image__shape"></div><!-- /.testimonials-two__image__shape -->
                    <div class="testimonials-two__image__inner">
                        <img src="{{ url('assets/frontend/images/placements/placement-3.jpg') }}" alt="testimonial">
                    </div><!-- /.testimonials-two__image__inner -->
                </div>
            </div>
            <div class="col-md-7">
                <h3 class="sec-title__title">Monthly Mock <span class="sec-title__title__text">Interviews</span></h3>
                <p class="about-two__text">
                    To prepare students for real job interviews, we conduct Monthly Mock Interview Sessions.It helps students to:
                </p>
                <div class="about-two__row row">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Reduce fear and nervousness in real interviews</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Practice speaking clearly and professionally</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Know what to expect in actual interviews</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Get feedback to work on mistakes</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                </div><!-- /.about-two__row row -->
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-7">
                <h3 class="sec-title__title">Live Industry <span class="sec-title__title__text">Visits</span></h3>
                <p class="about-two__text">
                    To give students practical exposure, we arrange Live Industry Visits:
                </p>
                <div class="about-two__row row">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">See how companies use digital marketing in daily work</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Learn directly from industry professionals</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Understand how campaigns, tools, and teams function</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-two__info">
                            <span class="about-two__info__icon">
                                <i class="icon-check-2"></i>
                            </span><!-- /.about-two__info__icon -->
                            <h4 class="about-two__info__title">Decide career paths based on interest and experience.</h4><!-- /.about-two__info__title -->
                        </div><!-- /.about-two__info -->
                    </div><!-- /.col-12 -->
                </div><!-- /.about-two__row row -->
            </div>
            <div class="col-md-5">
                <div class="testimonials-two__image mirror">
                    <div class="testimonials-two__image__shape"></div><!-- /.testimonials-two__image__shape -->
                    <div class="testimonials-two__image__inner">
                        <img src="{{ url('assets/frontend/images/placements/placement-4.jpg') }}" alt="testimonial">
                    </div><!-- /.testimonials-two__image__inner -->
                </div>
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