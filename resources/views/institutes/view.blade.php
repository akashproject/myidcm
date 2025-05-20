@extends('layouts.main')
    @section('content')
	    <section class="main-slider-two" id="home">
            <div class="main-slider-two__carousel eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "animateIn": "fadeIn",
                    "animateOut": "fadeOut",
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": false,
                    "dots": false,
                    "autoplay": true,
                    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"]
                }'>
                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg" style="background-image: url({{ url('assets/frontend/images/shapes/main-slider-bg-2-1.png') }});"></div><!-- /.main-slider-two__bg -->
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
                                        <p class="main-slider-two__text">There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority Have Suffered Alteration In Some.</p><!-- /.text -->
                                    </div><!-- /.description -->
                                    <div class="main-slider-two__button">
                                        <div class="main-slider-two__button__inner">
                                            <a href="courses.html" class="main-slider-two__btn-1 eduhive-btn">
                                                <span>find course</span>
                                                <span class="eduhive-btn__icon">
                                                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                                </span>
                                            </a><!-- /.eduhive-btn -->
                                        </div><!-- /.main-slider-two__button__inner -->
                                        <div class="main-slider-two__button__inner">
                                            <a href="about.html" class="main-slider-two__btn-2 eduhive-btn eduhive-btn--border">
                                                <span>About us</span>
                                                <span class="eduhive-btn__icon">
                                                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                                </span>
                                            </a><!-- /.eduhive-btn -->
                                        </div><!-- /.main-slider-two__button__inner -->
                                    </div><!-- /.button -->
                                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-2.png') }}" alt="shape" class="main-slider-two__content__shape-one slider-image">
                                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-3.png') }}" alt="shape" class="main-slider-two__content__shape-two slider-image">
                                </div><!-- /.main-slider-two__content -->
                            </div><!-- /.main-slider-two__col-content -->
                            <div class="main-slider-two__col-image">
                                <div class="main-slider-two__image">
                                    <div class="main-slider-two__image__inner">
                                        <div class="main-slider-two__image__mask">
                                            <img src="{{ url('assets/frontend/images/main-slider/main-slider-2-1.jpg') }}" alt="slider image" class="slider-image">
                                        </div><!-- /.main-slider-two__image__mask -->
                                        <div class="main-slider-two__image__one">
                                            <img src="{{ url('assets/frontend/images/main-slider/main-slider-2-2.jpg') }}" alt="slider image" class="slider-image">
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="main-slider-two__video-btn video-btn video-popup">
                                                <i class="icon-play"></i>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a><!-- /.video-btn -->
                                        </div><!-- /.main-slider-two__image__one -->
                                        <div class="main-slider-two__image__two">
                                            <img src="{{ url('assets/frontend/images/main-slider/main-slider-2-3.jpg') }}" alt="slider image" class="slider-image">
                                        </div><!-- /.main-slider-two__image__two -->
                                        <div class="main-slider-two__student">
                                            <div class="main-slider-two__student__image">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-1.png') }}" alt="student">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-2.png') }}" alt="student">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-3.png') }}" alt="student">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-4.png') }}" alt="student">
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
                                        <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-4.png') }}" alt="shape" class="main-slider-two__image__shape-one slider-image">
                                        <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-5.png') }}" alt="shape" class="main-slider-two__image__shape-two slider-image">
                                        <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-7.png') }}" alt="shape" class="main-slider-two__image__shape-three slider-image">
                                        <div class="main-slider-two__image__shape-box"></div>
                                    </div><!-- /.main-slider-two__image__inner -->
                                </div><!-- /.main-slider-two__image -->
                            </div><!-- /.main-slider-two__col-image -->
                        </div><!-- /.row gutter-y-60 -->
                    </div><!-- /.container -->
                    <div class="main-slider-two__shape-box"></div><!-- /.main-slider-two__shape-box -->
                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-1.png') }}" alt="shape" class="main-slider-two__shape-one slider-image">
                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-6.png') }}" alt="shape" class="main-slider-two__shape-two slider-image">
                </div><!-- /.main-slider-two__item -->
                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg" style="background-image: url({{ url('assets/frontend/images/shapes/main-slider-bg-2-1.png') }});"></div><!-- /.main-slider-two__bg -->
                    <div class="container">
                        <div class="row gutter-y-60 align-items-center">
                            <div class="main-slider-two__col-content">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__top">
                                        <p class="main-slider-two__sub-title">The Pathway to Education</p><!-- /.sub-title -->
                                    </div><!-- /.main-slider-two__top -->
                                    <h2 class="main-slider-two__title">
                                        <span class="main-slider-two__title__inner">Learn & Grow Your <br> <span class="main-slider-two__title__text">skills.</span> From Anywhere.</span>
                                    </h2><!-- /.title -->
                                    <div class="main-slider-two__description">
                                        <p class="main-slider-two__text">Who's Responsible For The Ask For This Request? My Supervisor Didn't Like The Latest Revision You Gave Me Can You Switch.</p><!-- /.text -->
                                    </div><!-- /.description -->
                                    <div class="main-slider-two__button">
                                        <div class="main-slider-two__button__inner">
                                            <a href="courses.html" class="main-slider-two__btn-1 eduhive-btn">
                                                <span>find course</span>
                                                <span class="eduhive-btn__icon">
                                                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                                </span>
                                            </a><!-- /.eduhive-btn -->
                                        </div><!-- /.main-slider-two__button__inner -->
                                        <div class="main-slider-two__button__inner">
                                            <a href="about.html" class="main-slider-two__btn-2 eduhive-btn eduhive-btn--border">
                                                <span>About us</span>
                                                <span class="eduhive-btn__icon">
                                                    <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                                </span>
                                            </a><!-- /.eduhive-btn -->
                                        </div><!-- /.main-slider-two__button__inner -->
                                    </div><!-- /.button -->
                                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-2.png') }}" alt="shape" class="main-slider-two__content__shape-one slider-image">
                                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-3.png') }}" alt="shape" class="main-slider-two__content__shape-two slider-image">
                                </div><!-- /.main-slider-two__content -->
                            </div><!-- /.main-slider-two__col-content -->
                            <div class="main-slider-two__col-image">
                                <div class="main-slider-two__image">
                                    <div class="main-slider-two__image__inner">
                                        <div class="main-slider-two__image__mask">
                                            <img src="{{ url('assets/frontend/images/main-slider/main-slider-2-4.jpg') }}" alt="slider image" class="slider-image">
                                        </div><!-- /.main-slider-two__image__mask -->
                                        <div class="main-slider-two__image__one">
                                            <img src="{{ url('assets/frontend/images/main-slider/main-slider-2-5.jpg') }}" alt="slider image" class="slider-image">
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="main-slider-two__video-btn video-btn video-popup">
                                                <i class="icon-play"></i>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a><!-- /.video-btn -->
                                        </div><!-- /.main-slider-two__image__one -->
                                        <div class="main-slider-two__image__two">
                                            <img src="{{ url('assets/frontend/images/main-slider/main-slider-2-6.jpg') }}" alt="slider image" class="slider-image">
                                        </div><!-- /.main-slider-two__image__two -->
                                        <div class="main-slider-two__student">
                                            <div class="main-slider-two__student__image">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-1.png') }}" alt="student">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-2.png') }}" alt="student">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-3.png') }}" alt="student">
                                                <img src="{{ url('assets/frontend/images/main-slider/main-slider-student-2-4.png') }}" alt="student">
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
                                        <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-4.png') }}" alt="shape" class="main-slider-two__image__shape-one slider-image">
                                        <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-5.png') }}" alt="shape" class="main-slider-two__image__shape-two slider-image">
                                        <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-7.png') }}" alt="shape" class="main-slider-two__image__shape-three slider-image">
                                        <div class="main-slider-two__image__shape-box"></div>
                                    </div><!-- /.main-slider-two__image__inner -->
                                </div><!-- /.main-slider-two__image -->
                            </div><!-- /.main-slider-two__col-image -->
                        </div><!-- /.row gutter-y-60 -->
                    </div><!-- /.container -->
                    <div class="main-slider-two__shape-box"></div><!-- /.main-slider-two__shape-box -->
                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-1.png') }}" alt="shape" class="main-slider-two__shape-one slider-image">
                    <img src="{{ url('assets/frontend/images/shapes/main-slider-shape-2-6.png') }}" alt="shape" class="main-slider-two__shape-two slider-image">
                </div><!-- /.main-slider-two__item -->
            </div><!-- /.main-slider-two__carousel -->
        </section><!-- /.main-slider-two -->
        
        <section class="about-two section-space" id="about">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-two__image">
                            <img src="{{ url('assets/frontend/images/about/about-2-1.jpg') }}" alt="about image" class="about-two__image__one">
                            <img src="{{ url('assets/frontend/images/about/about-2-2.jpg') }}" alt="about image" class="about-two__image__two">
                            <img src="{{ url('assets/frontend/images/shapes/about-shape-2-1.png') }}" alt="shape" class="about-two__image__shape-one">
                            <div class="about-two__image__shape-box"></div><!-- /.about-two__image__shape-box -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-two__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h6 class="sec-title__tagline">ABOUT US</h6><!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title">Learn New Skills <span class="sec-title__title__shape">To Go Ahead For</span> <br> Your <span class="sec-title__title__text">Career</span></h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <div class="about-two__description wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <p class="about-two__text">Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the.</p><!-- /.about-two__text -->
                            </div><!-- /.about-two__description -->
                            <div class="about-two__row row">
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <div class="about-two__info">
                                        <span class="about-two__info__icon">
                                            <i class="icon-check-2"></i>
                                        </span><!-- /.about-two__info__icon -->
                                        <h4 class="about-two__info__title">Flexible Course Plan</h4><!-- /.about-two__info__title -->
                                    </div><!-- /.about-two__info -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <div class="about-two__info">
                                        <span class="about-two__info__icon">
                                            <i class="icon-check-2"></i>
                                        </span><!-- /.about-two__info__icon -->
                                        <h4 class="about-two__info__title">Educator Support</h4><!-- /.about-two__info__title -->
                                    </div><!-- /.about-two__info -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <div class="about-two__info">
                                        <span class="about-two__info__icon">
                                            <i class="icon-check-2"></i>
                                        </span><!-- /.about-two__info__icon -->
                                        <h4 class="about-two__info__title">Expert mentors</h4><!-- /.about-two__info__title -->
                                    </div><!-- /.about-two__info -->
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <div class="about-two__info">
                                        <span class="about-two__info__icon">
                                            <i class="icon-check-2"></i>
                                        </span><!-- /.about-two__info__icon -->
                                        <h4 class="about-two__info__title">Lifetime Access</h4><!-- /.about-two__info__title -->
                                    </div><!-- /.about-two__info -->
                                </div><!-- /.col-sm-6 -->
                            </div><!-- /.about-two__row row -->
                            <div class="about-two__button wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <a href="about.html" class="eduhive-btn">
                                    <span>About us</span>
                                    <span class="eduhive-btn__icon">
                                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                    </span>
                                </a><!-- /.eduhive-btn -->
                            </div><!-- /.about-two__button -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-60 -->
            </div><!-- /.container -->
            <img src="{{ url('assets/frontend/images/shapes/about-shape-2-2.png') }}" alt="shape" class="about-two__shape-one">
            <img src="{{ url('assets/frontend/images/shapes/about-shape-2-3.png') }}" alt="shape" class="about-two__shape-two">
        </section><!-- /.about-two section-space -->

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
                        <ul class="recruiters">
                            @foreach(getRecruiters() as $recruiter)
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
            <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-3-1.png')}}" alt="shape" class="testimonials-three__shape-one">
            <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-3-2.png')}}" alt="shape" class="testimonials-three__shape-two">
            <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-3-3.png')}}" alt="shape" class="testimonials-three__shape-three">
        </section><!-- /.testimonials-three section-space2 -->

        <section class="courses-two section-space-bottom" id="courses">
            <div class="courses-two__bg" style="background-image: url({{ url('assets/frontend/images/shapes/courses-bg-2-1.png') }});"></div>
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
                    <div class="item programming">
                        <div class="course-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="course-card__image">
                                <img src="{{ url('assets/frontend/images/courses/course-1-1.jpg') }}" alt="WordPress for Everyone: Unlock Your Creativity Online">
                                <div class="course-card__ratings">
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
                            </div><!-- /.course-card__image -->
                            <div class="course-card__content">
                                <div class="course-card__content__top">
                                    <div class="course-card__category">Experts</div><!-- /.course-card__category -->
                                    <div class="course-card__duration">
                                        <span class="course-card__duration__icon">
                                            <i class="icon-clock"></i>
                                        </span><!-- /.course-card__duration__icon -->
                                        25 weeks
                                    </div><!-- /.course-card__duration -->
                                </div><!-- /.course-card__content__top -->
                                <h3 class="course-card__title"><a href="wordpress-development.html">WordPress for Everyone: Unlock Your Creativity Online</a></h3><!-- /.course-card__title -->
                                <div class="course-card__info">
                                    <div class="course-card__lessons">
                                        <span class="course-card__lessons__icon">
                                            <i class="icon-open-book"></i>
                                        </span><!-- /.course-card__lessons__icon -->
                                        25 lessons
                                    </div><!-- /.course-card__lessons -->
                                    <div class="course-card__students">
                                        <span class="course-card__students__icon">
                                            <i class="icon-multiple-users-silhouette"></i>
                                        </span><!-- /.course-card__lessons__icon -->
                                        350 Students
                                    </div><!-- /.course-card__students -->
                                </div><!-- /.course-card__info -->
                                <h4 class="course-card__price">$<span>69.00</span></h4><!-- /.course-card__price -->
                            </div><!-- /.course-card__content -->
                            <div class="course-card__hover" style="background-image: url({{ url('assets/frontend/images/shapes/course-card-bg-1-1.png') }});">
                                <div class="course-card__hover__content">
                                    <div class="course-card__content__top course-card__content__top--hover">
                                        <div class="course-card__category">Experts</div><!-- /.course-card__category -->
                                        <div class="course-card__duration">
                                            <span class="course-card__duration__icon">
                                                <i class="icon-clock"></i>
                                            </span><!-- /.course-card__duration__icon -->
                                            25 weeks
                                        </div><!-- /.course-card__duration -->
                                    </div><!-- /.course-card__content__top -->
                                    <h3 class="course-card__title course-card__title--hover"><a href="wordpress-development.html">WordPress for Everyone: Unlock Your Creativity Online</a></h3><!-- /.course-card__title -->
                                    <p class="course-card__text">Viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus</p><!-- /.course-card__text -->
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
                                    <a href="wordpress-development.html" class="course-card__btn eduhive-btn eduhive-btn--border">
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
                                            25 lessons
                                        </div><!-- /.course-card__lessons -->
                                        <div class="course-card__students">
                                            <span class="course-card__students__icon">
                                                <i class="icon-multiple-users-silhouette"></i>
                                            </span><!-- /.course-card__lessons__icon -->
                                            350 Students
                                        </div><!-- /.course-card__students -->
                                    </div><!-- /.course-card__info -->
                                </div><!-- /.course-card__hover__content -->
                            </div><!-- /.course-card__hover -->
                        </div><!-- /.course-card -->
                    </div><!-- /.item programming -->
                </div><!-- /.courses-two__carousel -->
            </div><!-- /.courses-two__container container -->
            <div class="container">
                <div class="courses-two__custome-navs"></div><!-- /.courses-two__custome-navs -->
            </div><!-- /.container -->
            <div class="courses-two__box-one"></div><!-- /.courses-two__box-one -->
            <div class="courses-two__box-two"></div><!-- /.courses-two__box-two -->
            <img src="{{ url('assets/frontend/images/shapes/courses-shape-2-1.png') }}" alt="shape" class="courses-two__shape-one">
            <img src="{{ url('assets/frontend/images/shapes/courses-shape-2-2.png') }}" alt="shape" class="courses-two__shape-two">
        </section><!-- /.courses-two section-space-bottom -->

        <section class="faq-one faq-one--home section-space">
            <div class="container">
                <div class="row gutter-y-50 align-items-center">
                    <div class="col-lg-6">
                        <div class="funfact-one">
                            <div class="funfact-one__grid">
                                <div class="funfact-one__item funfact-one__item--secondary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <div class="funfact-one__icon">
                                        <span class="funfact-one__icon__inner"><i class="icon-connectibity"></i></span>
                                    </div><!-- /.funfact-one__icon -->
                                    <h3 class="funfact-one__title count-box">
                                        <span class="count-text" data-stop="30" data-speed="1500">0</span>
                                        <span>k+</span>
                                    </h3><!-- /.funfact-one__title -->
                                    <p class="funfact-one__text">Satisfied Student</p><!-- /.funfact-one__text -->
                                </div><!-- /.funfact-one__item -->
                                <div class="funfact-one__item funfact-one__item--primary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <div class="funfact-one__icon">
                                        <span class="funfact-one__icon__inner"><i class="icon-batch-assign"></i></span>
                                    </div><!-- /.funfact-one__icon -->
                                    <h3 class="funfact-one__title count-box">
                                        <span class="count-text" data-stop="6500" data-speed="1500">0</span>
                                        <span>+</span>
                                    </h3><!-- /.funfact-one__title -->
                                    <p class="funfact-one__text">Class Completed</p><!-- /.funfact-one__text -->
                                </div><!-- /.funfact-one__item -->
                                <div class="funfact-one__item funfact-one__item--primary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <div class="funfact-one__icon">
                                        <span class="funfact-one__icon__inner"><i class="icon-students"></i></span>
                                    </div><!-- /.funfact-one__icon -->
                                    <h3 class="funfact-one__title count-box">
                                        <span class="count-text" data-stop="6561" data-speed="1500">0</span>
                                        <span>+</span>
                                    </h3><!-- /.funfact-one__title -->
                                    <p class="funfact-one__text">Active Students</p><!-- /.funfact-one__text -->
                                </div><!-- /.funfact-one__item -->
                                <div class="funfact-one__item funfact-one__item--secondary wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <div class="funfact-one__icon">
                                        <span class="funfact-one__icon__inner"><i class="icon-instructors"></i></span>
                                    </div><!-- /.funfact-one__icon -->
                                    <h3 class="funfact-one__title count-box">
                                        <span class="count-text" data-stop="400" data-speed="1500">0</span>
                                        <span>+</span>
                                    </h3><!-- /.funfact-one__title -->
                                    <p class="funfact-one__text">Experts Instructors</p><!-- /.funfact-one__text -->
                                </div><!-- /.funfact-one__item -->
                            </div><!-- /.rfunfact-one__grid -->
                        </div><!-- /.funfact-one -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h6 class="sec-title__tagline">faq’s</h6><!-- /.sec-title__tagline -->
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
                </div><!-- /.row gutter-y-50 -->
            </div><!-- /.container -->
            <div class="faq-one__image-inner">
                <img src="{{ url('assets/frontend/images/faq/faq-2-1.jpg') }}" alt="faq">
            </div><!-- /.faq-one__image-inner -->
            <img src="{{ url('assets/frontend/images/shapes/faq-shape-1-5.png') }}" alt="shape" class="faq-one__shape-three">
        </section><!-- /.faq-one section-space -->

        <section class="online-class section-space-bottom">
            <div class="online-class__inner">
                <div class="online-class__inner__bg" style="background-image: url({{ url('assets/frontend/images/shapes/online-class-bg-1-1.png') }});">
                </div><!-- /.online-class__inner__bg -->
            </div><!-- /.online-class__inner -->
            <div class="container">
                <div class="video-one wow fadeInUp" data-wow-duration="1500ms">
                    <div class="video-one__bg" style="background-image: url({{ url('assets/frontend/images/resources/video-1-1.jpg') }});">
                        <img src="{{ url('assets/frontend/images/resources/video-1-2.jpg') }}" alt="video">
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

        <section class="testimonials-two section-space" id="testimonials">
            <div class="container">
                <div class="row gutter-y-40 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="testimonials-two__image">
                            <div class="testimonials-two__image__shape"></div><!-- /.testimonials-two__image__shape -->
                            <div class="testimonials-two__image__inner">
                                <img src="{{ url('assets/frontend/images/testimonials/testimonial-2-1.jpg') }}" alt="testimonial">
                            </div><!-- /.testimonials-two__image__inner -->
                        </div><!-- /.testimonials-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="testimonials-two__content">
                            <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h6 class="sec-title__tagline">our testimonials</h6><!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title">What Our <span class="sec-title__title__shape">Students Have</span> <br> to <span class="sec-title__title__text">Say</span></h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <div class="testimonials-two__carousel eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
                        "items": 1,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop": true,
                        "autoplay": true,
                        "nav": false,
                        "dots": true,
                        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"]
                        }'>
                                <div class="item">
                                    <p class="testimonials-two__quote">Nullam dignissim, ante scelerisque is euismod fermentum odio sem semper is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus. Aliquam pellentesque nisi dui eget dapibus enim ornare eu morbi.</p><!-- /.quote -->
                                    <div class="testimonials-two__bottom">
                                        <div class="testimonials-two__identity">
                                            <h4 class="testimonials-two__name">Kathryn Murphy</h4><!-- /.name -->
                                            <p class="testimonials-two__designation">Web Designer</p><!-- /.designation -->
                                        </div><!-- /.testimonials-two__identity -->
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
                                    </div><!-- /.testimonials-two__bottom -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <p class="testimonials-two__quote">I really think this could go viral. I think this should be fairly easy so if you just want to have a look we need to make the new version clean and sexy that will be a conversation piece. I'll know it when i see it can.</p><!-- /.quote -->
                                    <div class="testimonials-two__bottom">
                                        <div class="testimonials-two__identity">
                                            <h4 class="testimonials-two__name">Sarah Albert</h4><!-- /.name -->
                                            <p class="testimonials-two__designation">managing director</p><!-- /.designation -->
                                        </div><!-- /.testimonials-two__identity -->
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
                                    </div><!-- /.testimonials-two__bottom -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <p class="testimonials-two__quote">How much will it cost, make it original just do what you think. I trust you, and i love it, but can you invert all colors?, yet in an ideal world. Can you make pink a little more pinkish it looks a bit empty try to make.</p><!-- /.quote -->
                                    <div class="testimonials-two__bottom">
                                        <div class="testimonials-two__identity">
                                            <h4 class="testimonials-two__name">Esther Howard</h4><!-- /.name -->
                                            <p class="testimonials-two__designation">Ethical Hacker</p><!-- /.designation -->
                                        </div><!-- /.testimonials-two__identity -->
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
                                    </div><!-- /.testimonials-two__bottom -->
                                </div><!-- /.item -->
                            </div><!-- /.testimonials-two__carousel -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-40 -->
            </div><!-- /.container -->
            <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-2-1.png') }}" alt="shape" class="testimonials-two__shape-one">
            <img src="{{ url('assets/frontend/images/shapes/testimonial-shape-2-2.png') }}" alt="shape" class="testimonials-two__shape-two">
        </section><!-- /.testimonials-two section-space -->

        <section class="instructors-two section-space" id="instructors">
            <div class="instructors-two__bg" style="background-image: url({{ url('assets/frontend/images/shapes/instructors-bg-2-1.jpg') }});"></div><!-- /.instructors-two__bg -->
            <div class="container">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <h6 class="sec-title__tagline">our expert team</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">Our <span class="sec-title__title__text">expert</span> <span class="sec-title__title__shape">instructor</span></h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="instructors-two__carousel eduhive-owl__carousel eduhive-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                        "items": 1,
                        "margin": 10,
                        "loop": true,
                        "smartSpeed": 700,
                        "nav": false,
                        "dots": false,
                        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                        "autoplay": true,
                        "responsive": {
                            "0": {
                                "items": 1,
                                "nav": true,
                                "dots": false,
                                "margin": 10
                            },
                            "768": {
                                "items": 2,
                                "dots": true,
                                "margin": 30
                            },
                            "992": {
                                "items": 3,
                                "margin": 30
                            }
                        }
                    }'>
                    <div class="item">
                        <div class="instructor-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="instructor-card-two__image">
                                <img src="{{ url('assets/frontend/images/instructors/instructor-2-1.jpg') }}" alt="Mike Hardson">
                            </div><!-- /.instructor-card-two__image -->
                            <div class="instructor-card-two__content">
                                <div class="instructor-card-two__info">
                                    <h3 class="instructor-card-two__name">
                                        <a href="instructor-details.html">Mike Hardson</a>
                                    </h3><!-- /.instructor-card-two__name -->
                                    <h6 class="instructor-card-two__designation">data scientist</h6><!-- /.instructor-card-two__designation -->
                                </div><!-- /.instructor-card-two__info -->
                                <div class="instructor-card-two__social">
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.instructor-card-two__social -->
                            </div><!-- /.instructor-card-two__content -->
                        </div><!-- /.instructor-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="instructor-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="instructor-card-two__image">
                                <img src="{{ url('assets/frontend/images/instructors/instructor-2-2.jpg') }}" alt="aleesha brown">
                            </div><!-- /.instructor-card-two__image -->
                            <div class="instructor-card-two__content">
                                <div class="instructor-card-two__info">
                                    <h3 class="instructor-card-two__name">
                                        <a href="instructor-details.html">aleesha brown</a>
                                    </h3><!-- /.instructor-card-two__name -->
                                    <h6 class="instructor-card-two__designation">Web Developer</h6><!-- /.instructor-card-two__designation -->
                                </div><!-- /.instructor-card-two__info -->
                                <div class="instructor-card-two__social">
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.instructor-card-two__social -->
                            </div><!-- /.instructor-card-two__content -->
                        </div><!-- /.instructor-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="instructor-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="instructor-card-two__image">
                                <img src="{{ url('assets/frontend/images/instructors/instructor-2-3.jpg') }}" alt="david cooper">
                            </div><!-- /.instructor-card-two__image -->
                            <div class="instructor-card-two__content">
                                <div class="instructor-card-two__info">
                                    <h3 class="instructor-card-two__name">
                                        <a href="instructor-details.html">david cooper</a>
                                    </h3><!-- /.instructor-card-two__name -->
                                    <h6 class="instructor-card-two__designation">software engineer</h6><!-- /.instructor-card-two__designation -->
                                </div><!-- /.instructor-card-two__info -->
                                <div class="instructor-card-two__social">
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.instructor-card-two__social -->
                            </div><!-- /.instructor-card-two__content -->
                        </div><!-- /.instructor-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="instructor-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="instructor-card-two__image">
                                <img src="{{ url('assets/frontend/images/instructors/instructor-2-4.jpg') }}" alt="kevin martin">
                            </div><!-- /.instructor-card-two__image -->
                            <div class="instructor-card-two__content">
                                <div class="instructor-card-two__info">
                                    <h3 class="instructor-card-two__name">
                                        <a href="instructor-details.html">kevin martin</a>
                                    </h3><!-- /.instructor-card-two__name -->
                                    <h6 class="instructor-card-two__designation">App Developer</h6><!-- /.instructor-card-two__designation -->
                                </div><!-- /.instructor-card-two__info -->
                                <div class="instructor-card-two__social">
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.instructor-card-two__social -->
                            </div><!-- /.instructor-card-two__content -->
                        </div><!-- /.instructor-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="instructor-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="instructor-card-two__image">
                                <img src="{{ url('assets/frontend/images/instructors/instructor-2-5.jpg') }}" alt="christine eve">
                            </div><!-- /.instructor-card-two__image -->
                            <div class="instructor-card-two__content">
                                <div class="instructor-card-two__info">
                                    <h3 class="instructor-card-two__name">
                                        <a href="instructor-details.html">christine eve</a>
                                    </h3><!-- /.instructor-card-two__name -->
                                    <h6 class="instructor-card-two__designation">Marketing Expert</h6><!-- /.instructor-card-two__designation -->
                                </div><!-- /.instructor-card-two__info -->
                                <div class="instructor-card-two__social">
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.instructor-card-two__social -->
                            </div><!-- /.instructor-card-two__content -->
                        </div><!-- /.instructor-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="instructor-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="instructor-card-two__image">
                                <img src="{{ url('assets/frontend/images/instructors/instructor-2-6.jpg') }}" alt="Adlof Carone">
                            </div><!-- /.instructor-card-two__image -->
                            <div class="instructor-card-two__content">
                                <div class="instructor-card-two__info">
                                    <h3 class="instructor-card-two__name">
                                        <a href="instructor-details.html">Adlof Carone</a>
                                    </h3><!-- /.instructor-card-two__name -->
                                    <h6 class="instructor-card-two__designation">UI/UX Designer</h6><!-- /.instructor-card-two__designation -->
                                </div><!-- /.instructor-card-two__info -->
                                <div class="instructor-card-two__social">
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://facebook.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <span class="instructor-card-two__social__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.instructor-card-two__social -->
                            </div><!-- /.instructor-card-two__content -->
                        </div><!-- /.instructor-card-two -->
                    </div><!-- /.item -->
                </div><!-- /.instructors-two__carousel -->
            </div><!-- /.container -->
            <img src="{{ url('assets/frontend/images/shapes/instructors-shape-2-1.png') }}" alt="shape" class="instructors-two__shape">
            <div class="instructors-two__shape-box-one"></div><!-- /.instructors-two__shape-box-one -->
            <div class="instructors-two__shape-box-two"></div><!-- /.instructors-two__shape-box-two -->
        </section><!-- /.instructors-two section-space -->

        <section class="blog-two section-space" id="blog">
            <div class="container">
                <div class="blog-two__top">
                    <div class="row gutter-y-60 align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="blog-two__content">
                                <div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h6 class="sec-title__tagline">latest blog</h6><!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title"><span class="sec-title__title__shape">our latest</span> <span class="sec-title__title__text">blog news</span></h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                            </div><!-- /.blog-two__content -->
                        </div><!-- /.col-xl-9 col-lg-8 -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="blog-two__button">
                                <a href="blog-grid-right.html" class="eduhive-btn">
                                    <span>view all blog</span>
                                    <span class="eduhive-btn__icon">
                                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                    </span>
                                </a><!-- /.eduhive-btn -->
                            </div><!-- /.blog-two__button -->
                        </div><!-- /.col-xl-3 col-lg-4 -->
                    </div><!-- /.row gutter-y-60 align-items-center -->
                </div><!-- /.blog-two__top -->
                <div class="row gutter-y-30">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="blog-card blog-card--two">
                            <div class="blog-card__image">
                                <img src="{{ url('assets/frontend/images/blog/blog-2-1.jpg') }}" alt="Questions to Ask Vendors Before Choosing an LMS Platform">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Questions
                                        to Ask Vendors Before Choosing an LMS Platform</span><!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li>
                                        <a href="#">
                                            <span class="blog-card__meta__icon">
                                                <i class="icon-comments"></i>
                                            </span>
                                            Web Design
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="blog-card__meta__icon">
                                                <i class="icon-date"></i>
                                            </span>
                                            Jan 26, 2024
                                        </a>
                                    </li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Questions to Ask Vendors Before
                                        Choosing an LMS Platform</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">Consequat Quisque eget congue velit in OF cursus leo sodales IS the
                                    euismod quis sapien euismod</p><!-- /.blog-card__text -->
                                <div class="blog-card__bottom">
                                    <div class="blog-card__author">
                                        <img src="{{ url('assets/frontend/images/blog/blog-author-2-1.png') }}" alt="Ronald Richards" class="blog-card__author__image">
                                        <div class="blog-card__author__identity">
                                            <p class="blog-card__author__text">By Admin</p><!-- /.author-text -->
                                            <h5 class="blog-card__author__name">
                                                <a href="#">Ronald Richards</a>
                                            </h5><!-- /.author-name -->
                                        </div><!-- /.blog-card__author__identity -->
                                    </div><!-- /.blog-card__author -->
                                    <a href="blog-details-right.html" class="eduhive-btn">
                                        <span class="eduhive-btn__text">read More</span>
                                        <span class="eduhive-btn__icon">
                                            <span class="eduhive-btn__icon__inner"><i class="icon-arrow-right"></i></span>
                                        </span>
                                    </a><!-- /.eduhive-btn -->
                                </div><!-- /.blog-card__bottom -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="row gutter-y-30">
                            <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="blog-card blog-card--two blog-card--right">
                                    <div class="blog-card__image">
                                        <img src="{{ url('assets/frontend/images/blog/blog-2-2.jpg') }}" alt="Make Your Own Expanding">
                                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Make Your Own Expanding</span><!-- /.sr-only --></a>
                                    </div><!-- /.blog-card__image -->
                                    <div class="blog-card__content">
                                        <ul class="list-unstyled blog-card__meta">
                                            <li>
                                                <a href="#">
                                                    <span class="blog-card__meta__icon">
                                                        <i class="icon-comments"></i>
                                                    </span>
                                                    Data Science
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="blog-card__meta__icon">
                                                        <i class="icon-date"></i>
                                                    </span>
                                                    Feb 28, 2024
                                                </a>
                                            </li>
                                        </ul><!-- /.list-unstyled blog-card__meta -->
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">Make Your Own
                                                Expanding</a></h3><!-- /.blog-card__title -->
                                        <div class="blog-card__author">
                                            <img src="{{ url('assets/frontend/images/blog/blog-author-2-2.png') }}" alt="Mike Hardson" class="blog-card__author__image">
                                            <div class="blog-card__author__identity">
                                                <p class="blog-card__author__text">By Admin</p><!-- /.author-text -->
                                                <h5 class="blog-card__author__name">
                                                    <a href="#">Mike Hardson</a>
                                                </h5><!-- /.author-name -->
                                            </div><!-- /.blog-card__author__identity -->
                                        </div><!-- /.blog-card__author -->
                                    </div><!-- /.blog-card__content -->
                                </div><!-- /.blog-card -->
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                                <div class="blog-card blog-card--two blog-card--right">
                                    <div class="blog-card__image">
                                        <img src="{{ url('assets/frontend/images/blog/blog-2-3.jpg') }}" alt="How to Remedy Tailbone Back">
                                        <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">How to Remedy Tailbone Back</span><!-- /.sr-only --></a>
                                    </div><!-- /.blog-card__image -->
                                    <div class="blog-card__content">
                                        <ul class="list-unstyled blog-card__meta">
                                            <li>
                                                <a href="#">
                                                    <span class="blog-card__meta__icon">
                                                        <i class="icon-comments"></i>
                                                    </span>
                                                    UI/UX Design
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="blog-card__meta__icon">
                                                        <i class="icon-date"></i>
                                                    </span>
                                                    Jun 20, 2024
                                                </a>
                                            </li>
                                        </ul><!-- /.list-unstyled blog-card__meta -->
                                        <h3 class="blog-card__title"><a href="blog-details-right.html">How to Remedy Tailbone
                                                Back</a></h3><!-- /.blog-card__title -->
                                        <div class="blog-card__author">
                                            <img src="{{ url('assets/frontend/images/blog/blog-author-2-3.png') }}" alt="david cooper" class="blog-card__author__image">
                                            <div class="blog-card__author__identity">
                                                <p class="blog-card__author__text">By Admin</p><!-- /.author-text -->
                                                <h5 class="blog-card__author__name">
                                                    <a href="#">david cooper</a>
                                                </h5><!-- /.author-name -->
                                            </div><!-- /.blog-card__author__identity -->
                                        </div><!-- /.blog-card__author -->
                                    </div><!-- /.blog-card__content -->
                                </div><!-- /.blog-card -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row gutter-y-30 -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-30 -->
            </div><!-- /.container -->
        </section><!-- /.blog-two section-space -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection