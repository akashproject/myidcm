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
                        <div class="col-md-8">
                            <ul class="page-header__list list-unstyled">
                                <li class="page-header-list-item">
                                    <span class="page-header__list__icon"><i class="icon-check-2"></i></span>
                                    100% Placement Assurance
                                </li><!-- /.page-header-list-item -->
                                <li class="page-header-list-item">
                                    <span class="page-header__list__icon"><i class="icon-check-2"></i></span>
                                    3 Months Paid Internship
                                </li><!-- /.page-header-list-item -->
                                <li class="page-header-list-item">
                                    <span class="page-header__list__icon"><i class="icon-check-2"></i></span>
                                    28 Live Projects
                                </li><!-- /.page-header-list-item -->
                                <li class="page-header-list-item">
                                    <span class="page-header__list__icon"><i class="icon-check-2"></i></span>
                                    Learn 40 Digital Automation Tools
                                </li><!-- /.page-header-list-item -->
                                <li class="page-header-list-item">
                                    <span class="page-header__list__icon"><i class="icon-check-2"></i></span>
                                    6 Certifications
                                </li><!-- /.page-header-list-item -->
                                <li class="page-header-list-item">
                                    <span class="page-header__list__icon"><i class="icon-check-2"></i></span>
                                    Mock Interview Sessions
                                </li><!-- /.page-header-list-item -->
                            </ul>
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
                                    <li data-tab="#reviews" class="tab-btn">reviews</li>
                                </ul><!-- /.tab-buttons -->
                                <div class="tabs-content">
                                    <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="overview" style="display: block;">
                                        <div class="course-details__description wow fadeInUp" data-wow-duration="1500ms">
                                            <h3 class="course-details__title course-details__title--description">Course Descriptions</h3><!-- /.course-details__title -->
                                            <div class="course-details__description__inner">
                                                <p class="course-details__description__text">Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.</p><!-- /.course-details__requirements__text -->
                                                <p class="course-details__description__text">The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac augu ehabitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is sodales augue consequat.</p><!-- /.course-details__requirements__text -->
                                            </div><!-- /.course-details__description__inner -->
                                        </div><!-- /.course-details__description -->
                                        <div class="course-details__requirements wow fadeInUp" data-wow-duration="1500ms">
                                            <h3 class="course-details__title course-details__title--requirements">Requirements for The Course</h3><!-- /.course-details__title -->
                                            <p class="course-details__requirements__text">Nulla facilisi. Vestibulum tristique sem in eros eleifend imperdiet. Donec quis convallis neque. In id lacus pulvinar lacus, eget vulputate lectus. Ut viverra bibendum lorem, at tempus nibh mattis in. Sed a massa eget lacus consequat auctor.</p><!-- /.course-details__requirements__text -->
                                            <ul class="course-details__requirements__list list-unstyled">
                                                <li class="course-details__requirements__item">
                                                    <span class="course-details__requirements__list__icon"><i class="icon-check-2"></i></span>
                                                    Ut Viverra Bibendum Lorem, At Tempus Nibh Mattis
                                                </li><!-- /.course-details__requirements__item -->
                                                <li class="course-details__requirements__item">
                                                    <span class="course-details__requirements__list__icon"><i class="icon-check-2"></i></span>
                                                    Quis Nostrud Exercitation Ullamco Laboris Nisi
                                                </li><!-- /.course-details__requirements__item -->
                                                <li class="course-details__requirements__item">
                                                    <span class="course-details__requirements__list__icon"><i class="icon-check-2"></i></span>
                                                    Duis Aute Irure And Dolor In Reprehenderit.
                                                </li><!-- /.course-details__requirements__item -->
                                                <li class="course-details__requirements__item">
                                                    <span class="course-details__requirements__list__icon"><i class="icon-check-2"></i></span>
                                                    Ante Rutrum Sed The Is Sodales Augue Consequat.
                                                </li><!-- /.course-details__requirements__item -->
                                            </ul><!-- /.course-details__requirements__list -->
                                        </div><!-- /.course-details__requirements -->
                                    </div><!-- /.overview-tab -->
                                    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="curriculum" style="display: none;">
                                        <div class="course-details__accordion">
                                            <div class="eduhive-accordion" data-grp-name="eduhive-accordion">
                                                <div class="accordion active">
                                                    <div class="accordion-title">
                                                        <h4>Introduction to Data Science</h4>
                                                        <span class="accordion-title__icon"></span>
                                                    </div><!-- /.accordion-title -->
                                                    <div class="accordion-content">
                                                        <div class="inner">
                                                            <div class="course-details__accordion__inner">
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Introduction to JavaScript, Run JavaScript in VSCode
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">5.00 Min</span>
                                                                        <span class="course-details__accordion__class__check complete">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        What is variable, five things you need to declare a variable
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">13.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Variable type, Numeric, String, Boolean
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">12.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Simple Mathematical operations in JavaScript
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">15.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        (advanced) Mathematical operation shorthand
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">11.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                            </div><!-- /.course-details__accordion__inner -->
                                                        </div><!-- /.inner -->
                                                    </div><!-- /.accordion-content -->
                                                </div><!-- /.accordion-item -->
                                                <div class="accordion">
                                                    <div class="accordion-title">
                                                        <h4>Intermediate Data Science</h4>
                                                        <span class="accordion-title__icon"></span>
                                                    </div><!-- /.accordion-title -->
                                                    <div class="accordion-content">
                                                        <div class="inner">
                                                            <div class="course-details__accordion__inner">
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Introduction And What Is An Api
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">9.00 Min</span>
                                                                        <span class="course-details__accordion__class__check complete">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Intro To Json, Json Structure, Parse, Stringify
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">14.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Json Placeholder, Get Data, Display Data On UI
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">12.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Load More Data, More API, Send Data To Function
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">15.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="course-details__accordion__class video-popup">
                                                                    <span class="course-details__accordion__class__title">
                                                                        <span class="course-details__accordion__class__icon">
                                                                            <i class="icon-files"></i>
                                                                        </span>
                                                                        Dynamically Display Loaded Data On Your Website
                                                                    </span>
                                                                    <span class="course-details__accordion__class__right">
                                                                        <span class="course-details__accordion__class__duration">12.00 Min</span>
                                                                        <span class="course-details__accordion__class__check">
                                                                            <i class="icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </a><!-- /.course-details__accordion__class -->
                                                            </div><!-- /.course-details__accordion__inner -->
                                                        </div><!-- /.inner -->
                                                    </div><!-- /.accordion-content -->
                                                </div><!-- /.accordion-item -->
                                            </div><!-- /.faq-accordion -->
                                        </div><!-- /.course-details__accordion -->
                                    </div><!-- /.curriculum-tab -->
                                    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="reviews" style="display: none;">
                                        <div class="comments-one course-details__comments">
                                            <h3 class="comments-one__title">02 Reviews, Data Science Course</h3><!-- /.comments-one__title -->
                                            <ul class="list-unstyled comments-one__list">
                                                <li class="comments-one__card">
                                                    <div class="comments-one__card__image">
                                                        <img src="/assets/frontend/images/courses/course-c-1-1.png" alt="Kevin martin">
                                                    </div><!-- /.comments-one__card__image -->
                                                    <div class="comments-one__card__content">
                                                        <div class="comments-one__card__top">
                                                            <div class="comments-one__card__info">
                                                                <h3 class="comments-one__card__title">Kevin martin</h3><!-- /.comments-one__card__title -->
                                                                <p class="comments-one__card__date">March 20, 2023 at 2:37 PM</p><!-- / -->
                                                            </div><!-- /.comments-one__card__info -->
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
                                                        </div><!-- /.comments-one__card__top -->
                                                        <p class="comments-one__card__text">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</p><!-- /.comments-one__card__text -->
                                                    </div><!-- /.comments-one__card__content -->
                                                </li><!-- /.comments-one__card -->
                                                <li class="comments-one__card">
                                                    <div class="comments-one__card__image">
                                                        <img src="{{ url('/assets/frontend/images/courses/course-c-1-2.png')}}" alt="Sarah albert">
                                                    </div><!-- /.comments-one__card__image -->
                                                    <div class="comments-one__card__content">
                                                        <div class="comments-one__card__top">
                                                            <div class="comments-one__card__info">
                                                                <h3 class="comments-one__card__title">Sarah albert</h3><!-- /.comments-one__card__title -->
                                                                <p class="comments-one__card__date">June 10, 2023 At 10:00 AM</p><!-- / -->
                                                            </div><!-- /.comments-one__card__info -->
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
                                                        </div><!-- /.comments-one__card__top -->
                                                        <p class="comments-one__card__text">Moving the goalposts sorry i was triple muted, so what do you feel you would bring to the table if you were hired for this position. A better understanding of usage can aid in prioritizing future efforts window of opportunity building</p><!-- /.comments-one__card__text -->
                                                    </div><!-- /.comments-one__card__content -->
                                                </li><!-- /.comments-one__card -->
                                            </ul><!-- /.list-unstyled comments-one__list -->
                                        </div><!-- /.comments-one -->
                                        <div class="course-details__form">
                                            <div class="course-details__form__top">
                                                <h3 class="course-details__form__title">Add a Review</h3>
                                                <p class="course-details__form__text">Your Email Address Will Not Be Published. Required Fields Are Marked *</p>
                                                <div class="course-details__form__ratings">
                                                    <h5 class="course-details__form__ratings__text">Rate this course? *</h5>
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
                                                </div><!-- /.course-details__form__ratings -->
                                            </div><!-- /.course-details__form__top -->
                                            <form action="assets/inc/sendemail.php" class="course-details__form__form contact-form-validated">
                                                <div class="course-details__form__group">
                                                    <div class="course-details__form__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                                        <input type="text" name="name" placeholder="Your Name">
                                                    </div><!-- /.course-details__form__control -->
                                                    <div class="course-details__form__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                                        <input type="email" name="email" placeholder="Your Email">
                                                    </div><!-- /.course-details__form__control -->
                                                    <div class="course-details__form__control course-details__form__control--full wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                                        <textarea name="message" placeholder="Write Message . ."></textarea>
                                                    </div><!-- /.course-details__form__control -->
                                                    <div class="course-details__form__control course-details__form__control--full wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                                                        <button type="submit" class="course-details__form__btn eduhive-btn eduhive-btn--normal"><span>Post Comment</span></button><!-- /.eduhive-btn -->
                                                    </div><!-- /.course-details__form__control -->
                                                </div><!-- /.course-details__form__group -->
                                            </form><!-- /.course-details__form__form -->
                                            <div class="result"></div><!-- /.result -->
                                        </div><!-- /.course-details__comments -->
                                    </div><!-- /.reviews-tab -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.course-details__main-tab-box -->
                        </div><!-- /.course-details__inner -->
                    </div><!-- /.col-xl-8 col-lg-7 -->
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
                                    </div><!-- /.course-details__info__text -->
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-clock-1"></i></span>
                                            Duration:
                                        </div>
                                        <span>8h 30m</span>
                                    </div><!-- /.course-details__info__text -->
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-graduation"></i></span>
                                            Lessons:
                                        </div>
                                        <span>15</span>
                                    </div><!-- /.course-details__info__text -->
                                </li>
                                <li>
                                    <div class="course-details__info__text">
                                        <div class="course-details__info__text__title">
                                            <span class="course-details__info__icon"><i class="icon-multiple-users"></i></span>
                                            Students:
                                        </div>
                                        <span>120</span>
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
                            <div class="course-details__info__price">This course Fee $49.00</div><!-- /.course-details__info__price -->
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

        <section class="courses-four section-space2">
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
                        <img src="{{ url('/assets/frontend/images/courses/course-1-2.jpg')}}" alt="The Data Science Revolution: Upgrading Your Skills">
                        
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
                    <div class="course-card__hover" style="background-image: url('/assets/frontend/images/shapes/course-card-bg-1-1.png');">
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
                                <img src="{{ url('/assets/frontend/images/instructors/instructor-1-1.jpg')}}" alt="Mike Hardson">
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
                    
                </div><!-- /.instructors-one__carousel -->
            </div><!-- /.container -->
            <img src="{{ url('/assets/frontend/images/shapes/instructors-shape-1-1.png')}}" alt="shape" class="instructors-one__shape-one">
            <img src="{{ url('/assets/frontend/images/shapes/instructors-shape-1-2.png')}}" alt="shape" class="instructors-one__shape-two">
            <div class="instructors-one__box-one"></div><!-- /.instructors-one__box-one -->
            <div class="instructors-one__box-two"></div><!-- /.instructors-one__box-two -->
        </section><!-- /.instructors-one section-space2 -->
    @endsection 