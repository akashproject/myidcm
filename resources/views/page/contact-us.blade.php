@extends('layouts.main')
    @section('content')
    <section class="page-header">
            <div class="container">
                <div class="page-header__content">
                    <ul class="eduhive-breadcrumb list-unstyled">
                        <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="index.html">Home</a></li>
                        <li><span>Contact Us</span></li>
                    </ul><!-- /.eduhive-breadcrumb list-unstyled -->
                    <h2 class="page-header__title">Contact Us</h2>
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
            <img src="assets/frontend/images/shapes/page-header-shape-1.png" alt="shape" class="page-header__shape-one">
            <img src="assets/frontend/images/shapes/page-header-shape-2.png" alt="shape" class="page-header__shape-two">
            <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
            <div class="page-header__shape-four"></div><!-- /.page-header__shape-four -->
        </section><!-- /.page-header -->

        <section class="contact-page section-space">
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="contact-page__content">
                            <div class="contact-page__content__bg" style="background-image: url(assets/frontend/images/shapes/contact-form-bg-1-1.png);"></div>
                            <!-- /.contact-page__content__bg -->
                            <div class="contact-page__content__image">
                                <img src="assets/frontend/images/resources/contact-1-1.jpg" alt="contact">
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
                                            <a href="tel:+9156980036420" class="contact-page__info__text">+91 5698 0036 420</a>
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
                                            <a href="mailto:needhelp@company.com" class="contact-page__info__text contact-page__info__text--email">needhelp@company.com</a>
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
                                            <a href="https://www.google.com/maps" class="contact-page__info__text">26 Manor St,
                                                Braintree UK</a>
                                        </div><!-- /.contact-page__info__content -->
                                    </li>
                                </ul><!-- /.list-unstyled -->
                                <div class="contact-page__student">
                                    <div class="contact-page__student__inner">
                                        <div class="contact-page__student__image">
                                            <img src="assets/frontend/images/resources/contact-student-1-1.png" alt="student">
                                            <img src="assets/frontend/images/resources/contact-student-1-2.png" alt="student">
                                            <img src="assets/frontend/images/resources/contact-student-1-3.png" alt="student">
                                            <img src="assets/frontend/images/resources/contact-student-1-4.png" alt="student">
                                        </div><!-- /.contact-page__student__image -->
                                        <p class="contact-page__student__text">1.5k Happy student’s</p>
                                        <!-- /.contact-page__student__text -->
                                    </div><!-- /.contact-page__student__inner -->
                                </div><!-- /.contact-page__student -->
                            </div><!-- /.contact-page__content__inner -->
                        </div><!-- /.contact-page__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <form class="contact-page__form contact-form-validated form-one" action="inc/sendemail.php">
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
                                    <textarea name="message" placeholder="Write Messge. . ."></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="eduhive-btn">
                                        <span>submit now</span>
                                        <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                            <div class="contact-page__form__image">
                                <img src="assets/frontend/images/resources/contact-1-2.jpg" alt="contact">
                            </div><!-- /.contact-page__form__image -->
                        </form><!-- /.contact-page__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-40 -->
            </div><!-- /.container -->
        </section><!-- /.contact-page section-space -->

        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                    <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact" allowfullscreen></iframe>
                </div>
                <!-- /.google-map -->
            </div><!-- /.container-fluid -->
        </section><!-- /.contact-map -->
    @endsection