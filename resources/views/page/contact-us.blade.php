@extends('layouts.main')
    @section('content')
        <section class="page-header">
            <div class="container">
                <div class="page-header__content">
                    <ul class="eduhive-breadcrumb list-unstyled">
                        <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="/">Home</a></li>
                        <li><span>Contact Us</span></li>
                    </ul><!-- /.eduhive-breadcrumb list-unstyled -->
                    <h1 class="page-header__title">Contact Us</h1>
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
            <img src="assets/frontend/images/shapes/page-header-shape-1.png" alt="shape" class="page-header__shape-one">
            <img src="assets/frontend/images/shapes/page-header-shape-2.png" alt="shape" class="page-header__shape-two">
            <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
            <div class="page-header__shape-four"></div><!-- /.page-header__shape-four -->
        </section><!-- /.page-header -->

        <section class="institutes-content section-space">
            <div class="container">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <h3 class="sec-title__title">Our <span class="sec-title__title__text sec-title__title__shape"> Institutes </span></span></h3>
                </div><!-- /.sec-title -->
                <div class="content-institute-one row">
                    @foreach(getInstitutes() as $value)
                        <div class="col-md-6">
                            <div class="content-institute">
                                <div class="contact-data p-4">
                                    <h4 class="institue-title">{{ $value->name }}</h4>
                                    <div class="institute-page__info">
                                        <div class="row">
                                            <div class="col-md-6 my-2">
                                                <div class="d-flex" style="gap: 10px;">
                                                    <div class="contact-page__info__icon">
                                                        <span class="contact-page__info__icon__inner">
                                                            <i class="icon-telephone"></i>
                                                        </span><!-- /.contact-page__info__icon__inner -->
                                                    </div><!-- /.contact-page__info__icon -->
                                                    <div class="contact-page__info__content">
                                                        <h3 class="contact-page__info__title">call now</h3>
                                                        <a href="tel:{{ $value->mobile }}" class="contact-page__info__text">+91 {{ $value->mobile }}</a>
                                                    </div><!-- /.contact-page__info__content -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <div class="d-flex" style="gap: 10px;">
                                                    <div class="contact-page__info__icon">
                                                        <span class="contact-page__info__icon__inner">
                                                            <i class="icon-paper-plane"></i>
                                                        </span><!-- /.contact-page__info__icon__inner -->
                                                    </div><!-- /.contact-page__info__icon -->
                                                    <div class="contact-page__info__content">
                                                        <h3 class="contact-page__info__title">Email</h3>
                                                        <a href="mailto:{{ $value->email }}" class="contact-page__info__text contact-page__info__text--email">{{ $value->email }}</a>
                                                    </div><!-- /.contact-page__info__content -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.list-unstyled -->
                                </div>
                                <div class="contact-map">
                                    {!! $value->gmap_location !!}
                                </div>
                                <div class="d-flex p-4" style="gap: 14px">
                                    <div class="contact-page__info__icon">
                                        <span class="contact-page__info__icon__inner">
                                            <i class="icon-location"></i>
                                        </span><!-- /.contact-page__info__icon__inner -->
                                    </div><!-- /.contact-page__info__icon -->
                                    <div class="contact-page__info__content">
                                        <h3 class="contact-page__info__title">address</h3>
                                        <a href="https://www.google.com/maps" class="contact-page__info__text">{{ get_theme_setting('address') }}</a>
                                    </div><!-- /.contact-page__info__content -->
                                </div>
                                <div class="text-center mb-5">
                                    <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
                                        <span class="eduhive-btn__icon">
                                            <span class="eduhive-btn__icon__inner" style="font-size:24px"><i class="icon-date"></i></span>
                                        </span>
                                        <span>Book an Appointment</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>   
            </div>   
            <img src="/assets/frontend/images/shapes/instructors-shape-1-1.png" alt="shape" class="instructors-one__shape-one">
            <img src="/assets/frontend/images/shapes/instructors-shape-1-2.png" alt="shape" class="instructors-one__shape-two">
            <div class="instructors-one__box-one"></div><!-- /.instructors-one__box-one -->
            <div class="instructors-one__box-two"></div><!-- /.instructors-one__box-two -->
        </section>
        
        <section class="contact-page section-space">
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="contact-page__content">
                            <div class="contact-page__content__bg" style="background-image: url(assets/frontend/images/shapes/contact-form-bg-1-1.png);"></div>
                            <!-- /.contact-page__content__bg -->
                            <div class="contact-page__content__image">
                                <img src="assets/frontend/images/resources/contact-1-1.png" alt="contact">
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
                                            <a href="tel:{{ get_theme_setting('mobile') }}" class="contact-page__info__text">+91 {{ get_theme_setting('mobile') }}</a>
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
                                            <a href="mailto:{{ get_theme_setting('email') }}" class="contact-page__info__text contact-page__info__text--email">{{ get_theme_setting('email') }}</a>
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
                                            <a href="https://www.google.com/maps" class="contact-page__info__text">{{ get_theme_setting('address') }}</a>
                                        </div><!-- /.contact-page__info__content -->
                                    </li>
                                </ul><!-- /.list-unstyled -->
                                
                            </div><!-- /.contact-page__content__inner -->
                        </div><!-- /.contact-page__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <form class="contact-page__form contact-form-validated form-one" action="inc/sendemail.php" style="height: 528px;">
                            <div class="form-one__group">
                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="tel" name="tel" placeholder="Phone Number">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Write Messge. . ." style="height: 132px;width: 100%;padding: 9px;border-radius: 9px;color: #666565;"></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="eduhive-btn">
                                        <span>submit now</span>
                                        <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                            <div class="contact-page__form__image" style="width:180px">
                                <img src="assets/frontend/images/resources/contact-1-2.png" alt="contact">
                            </div><!-- /.contact-page__form__image -->
                        </form><!-- /.contact-page__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-40 -->
            </div><!-- /.container -->
        </section><!-- /.contact-page section-space -->
    @endsection