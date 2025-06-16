@extends('layouts.main')
@section('content')
<section class="main-slider-one" id="home">
    <div class="active">
        <div class="main-slider-one__item">
            <div class="container">
                <div class="row gutter-y-60 align-items-center">
                    <div class="main-slider-one__col-content">
                        <div class="main-slider-one__content">
                            <img src="assets/frontend/images/shapes/main-slider-shape-1-1.png" alt="shape" class="main-slider-one__content__shape slider-image">
                            <p class="main-slider-one__sub-title">No More Boring Lectures.</p><!-- /.sub-title -->
                            <h2 style="font-size: 42px!important;" class="main-slider-one__title">Just Digital Marketing Skills<br />That <span class="main-slider-one__title__text">Get You Hired.</span>
                            </h2><!-- /.title -->
                            <div class="main-slider-one__description">
                                <p class="main-slider-one__text">Your career in AI-powered Digital & Content Marketing starts here with 100% Placement Assurance and Paid Internships.</p><!-- /.text -->
                            </div><!-- /.description -->
                                <h6> Our Partners </h6>
                                <div class="partner-certification">
                                    <a href="https://www.google.com/partners/agency?id=4439042709" target="_blank">
                                        <img src="https://www.gstatic.com/partners/badge/images/2022/PartnerBadgeClickable.svg" alt="Google Partner" />
                                    </a>
                                    <a href="" target="_blank"> 
                                        <img src="{{ url('assets/frontend/images/resources/meta-pertner.jpg') }}" alt="Meta Partner" />
                                    </a>    
                                </div>
                            <div class="main-slider-one__button">
                                <a href="#lead-generate-popup" class="main-slider-one__btn-1 eduhive-btn open-popup-link">
                                    <span>Book A Demo Class</span>
                                    <span class="eduhive-btn__icon">
                                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                    </span>
                                </a><!-- /.eduhive-btn -->
                                <a href="{{ url('/courses') }}" target="_blank" class="main-slider-one__btn-2 eduhive-btn eduhive-btn--border">
                                    <span>Explore courses</span>
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
                                                <span class="count-text" data-stop="8" data-speed="1500">0</span><span>K+ <br> Students</span>
                                            </h4><!-- /.total-student__text -->
                                        </div><!-- /.total-student__inner -->
                                    </div><!-- /.total-student -->
                                </div><!-- /.main-slider-one__image__one -->
                            </div><!-- /.main-slider-one__image__left -->
                            <div class="main-slider-one__image__right">
                                <div class="main-slider-one__image__two">
                                    <img src="assets/frontend/images/main-slider/main-slider-1-2.webp" alt="slider image" class="slider-image">
                                </div><!-- /.main-slider-one__image__two -->
                                <div class="main-slider-one__image__three">
                                    <img src="assets/frontend/images/main-slider/main-slider-1-3.webp" alt="slider image" class="slider-image">
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

@include('common.courses')

<section class="about-one section-space" id="about">
    <div class="about-one__bg" style="background-image: url(assets/frontend/images/shapes/about-bg-1-1.webp);"></div>
    <div class="container">
        <div class="row gutter-y-50 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-one__image">
                    <div class="about-one__image__one">
                        <img src="{{ url('assets/frontend/images/about/about-1-1.webp')}}" alt="about">
                        <div class="about-one__video">
                            <a href="" class="about-one__video__btn video-btn video-popup">
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
                        <img src="{{ url('assets/frontend/images/about/about-1-2.webp')}}" alt="about">
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
                        <h3 class="sec-title__title">Employers looking for the <span class="sec-title__title__text">right Skills</span>. <span class="sec-title__title__shape">Do you have it in you?</span> </h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__description wow fadeInUp" data-wow-duration="1500ms">
                        <p class="about-one__text">As we enter the AI era, AI-powered digital marketing is no longer the future – it’s happening now. Every business, big or small, needs digital marketing to grow. That’s why skilled marketers are in high demand. At IDCM, we offer classroom training with hands-on practice, real projects, and the latest AI tools. We don’t just teach — we prepare you to lead in the digital world.</p><!-- /.about-one__text -->
                    </div><!-- /.about-one__description -->
                    <div class="about-one__inner wow fadeInUp" data-wow-duration="1500ms">
                        <ul class="about-one__info list-unstyled">
                            <li>
                                <span class="about-one__info__icon"><i class="icon-right-up"></i></span>
                                100% Placement Assurance
                            </li>
                            <li>
                                <span class="about-one__info__icon"><i class="icon-right-up"></i></span>
                                36+ Live Projects
                            </li>
                            <li>
                                <span class="about-one__info__icon"><i class="icon-right-up"></i></span>
                                21 Certifications
                            </li>
                            <li>
                                <span class="about-one__info__icon"><i class="icon-right-up"></i></span>
                               70+ Digital Automation Tools
                            </li>
                        </ul>    
                        </ul><!-- /.about-one__info list-unstyled -->
                        <div class="about-one__button">
                            <a href="{{ url('/about-us') }}" class="about-one__btn eduhive-btn eduhive-btn--border">
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

@include('common.featuredCourse')

<section class="testimonials-three section-space2" id="testimonials">
    <div class="testimonials-three__bg" style="background-image: url(assets/frontend/images/shapes/testimonials-bg-3-1.webp);">
    </div><!-- /.testimonials-three__bg -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <h3 class="sec-title__title">Our <span class="sec-title__title__text">Top <span class="sec-title__title__shape">Recruiters</span></span></h3><!-- /.sec-title__title -->
                    <p>We connect you with top companies, and our dedicated placement assistance helps you land your dream job in the digital marketing industry. Our strong ties with leading recruiters ensure IDCM Alumni are highly sought after for cutting-edge job roles.</p>
                </div><!-- /.sec-title -->
            </div>
            <div class="col-md-8">
                <ul class="recruiters ">
                    @foreach(getRecruiters() as $key => $recruiter)
                    <div class="placement-redious-grid">
                        <span class="placement-grid-img">
                            <img src="{{ getSizedImage($recruiter->featured_image) }}" alt="{{ $recruiter->name }}" class="width-100">
                        </span>
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
                        <h3 class="sec-title__title">Why choose <span class="sec-title__title__text"><span class="sec-title__title__shape">IDCM</span></span></h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="faq-one__accordion">
                        <div class="eduhive-accordion" data-grp-name="eduhive-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms">
                                <div class="accordion-title">
                                    <h4>Discovering Talents</h4>
                                    <span class="accordion-title__icon">
                                        <i class="icon-double-arrow"></i>
                                    </span>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>The Digital Industry demands creative minds. We help bring out the hidden creator within you.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms">
                                <div class="accordion-title">
                                    <h4>Industry Projects</h4>
                                    <span class="accordion-title__icon">
                                        <i class="icon-double-arrow"></i>
                                    </span>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Industries look for real-world work experience. We put you on industry projects that set you apart.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms">
                                <div class="accordion-title">
                                    <h4>Earn While You Learn</h4>
                                    <span class="accordion-title__icon">
                                        <i class="icon-double-arrow"></i>
                                    </span>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Enjoy hands-on experience and start earning as you master new skills with our paid internship.</p>
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
                            <img src="assets/frontend/images/faq/faq-1-1.webp" alt="faq 1">
                        </div><!-- /.faq-one__image__one__inner -->
                        <img src="assets/frontend/images/shapes/faq-shape-1-2.png" alt="shape" class="faq-one__image__shape-one">
                        <img src="assets/frontend/images/shapes/faq-shape-1-3.png" alt="shape" class="faq-one__image__shape-two">
                        <img src="assets/frontend/images/shapes/faq-shape-1-5.png" alt="shape" class="faq-one__image__shape-three">
                        <div class="faq-one__image__shape-box"></div><!-- /.faq-one__image__shape-box -->
                    </div><!-- /.faq-one__image__one -->
                    <div class="faq-one__image__two">
                        <img src="assets/frontend/images/faq/faq-1-2.webp" alt="faq 2">
                    </div><!-- /.faq-one__image__two -->
                </div><!-- /.faq-one__image -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
    <img src="assets/frontend/images/shapes/faq-shape-1-1.png" alt="shape" class="faq-one__shape-one">
    <img src="assets/frontend/images/shapes/faq-shape-1-4.png" alt="shape" class="faq-one__shape-two">
</section><!-- /.faq-one section-space -->

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
    <img src="assets/frontend/images/resources/cta-1-1.webp" alt="shape" class="cta-one__image-one">
    <img src="assets/frontend/images/resources/cta-1-2.webp" alt="shape" class="cta-one__image-two">
    <img src="assets/frontend/images/shapes/cta-shape-1-1.png" alt="shape" class="cta-one__shape-one">
    <img src="assets/frontend/images/shapes/cta-shape-1-1.png" alt="shape" class="cta-one__shape-two">
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
                                        <p class="testimonial-card__quote">{!! $testimonial->comment !!}</p><!-- /.testimonial-card__quote -->
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
    </div><!-- /.container -->
    <img src="assets/frontend/images/shapes/testimonials-shape-1-1.png" alt="shape" class="testimonials-one__shape">
    <div class="testimonials-one__shape-box"></div><!-- /.testimonials-one__shape-box -->
</section><!-- /.testimonials-one section-space -->

<section class="instructors-one section-space2" id="instructors">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h6 class="sec-title__tagline">Success Stories</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">Our <span class="sec-title__title__text"><span class="sec-title__title__shape">students</span></span> say it best!</h3><!-- /.sec-title__title -->
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
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/swastika.webp') }}" alt="Video Thumbnail">
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
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/sumana.webp') }}" alt="Video Thumbnail">
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
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/amit.webp') }}" alt="Video Thumbnail">
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
                        <img class="video-thumbnail" src="{{ url('assets/frontend/videos/ashish.webp') }}" alt="Video Thumbnail">
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
                                   
</section><!-- /.instructors-one section-space2 -->

@endsection
