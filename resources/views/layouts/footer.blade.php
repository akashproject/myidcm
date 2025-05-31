<footer class="main-footer section-space-top">
    <div class="container">
        <div class="row gutter-y-40">
            <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="footer-widget footer-widget--about">
                    <div class="mb-3">
                        <a href="{{ url('/') }}" class="main-footer__logo">
                            <img src="{{ url('assets/logo/logo.gif') }}" width="209" alt="Eduhive HTML Template">
                        </a><!-- /.main-footer__logo -->
                    </div>
                    
                    <ul class="footer-widget__info">
                        <li>
                            <span class="footer-widget__info__icon"><i class="icon-location"></i></span>
                            <a href="https://www.google.com/maps">{{ get_theme_setting('address') }}</a>
                        </li>
                        <li>
                            <span class="footer-widget__info__icon"><i class="icon-email"></i></span>
                            <a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a>
                        </li>
                        <li>
                            <span class="footer-widget__info__icon"><i class="icon-telephone"></i></span>
                            <a href="tel:{{ get_theme_setting('mobile') }}">+91 {{ get_theme_setting('mobile') }}</a>
                        </li>
                    </ul><!-- /.footer-widget__info -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-xl-3 col-lg-4 -->
            <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        @foreach($footerMenu as $key => $value)
                        <li>
                            <a href="{{ $key }}">
                                <span class="footer-widget__links__icon">
                                    <i class="icon-double-arrow"></i>
                                </span>
                                {{  $value }}
                            </a>
                        </li>
                        @endforeach
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-xl-3 col-md-4 col-sm-6 -->
            <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Courses</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        @foreach(get_courses() as $course)
                        <li>
                            <a href="{{ route('view-courses',$course->slug) }}">
                                <span class="footer-widget__links__icon">
                                    <i class="icon-double-arrow"></i>
                                </span>
                                {{ $course->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-xl-3 col-md-4 col-sm-6 -->
            <div class="col-xl-3 col-md-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                
                <div class="footer-widget footer-widget--gallery">
                    <h2 class="footer-widget__title">Subscribe Newsletter</h2><!-- /.footer-widget__title -->
                    <div class="main-footer__newsletter mb-5">
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="main-footer__newsletter__form mc-form">
                            <input type="text" name="EMAIL" placeholder="Enter Your Mail">
                            <button type="submit" class="eduhive-btn">
                                <span>Subscribe</span>
                            </button>
                        </form><!-- /.main-footer__newsletter__form mc-form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.main-footer__newsletter -->
                    <div class="main-footer__social social-links text-center">
                        <a href="{{ get_theme_setting('facebook') }}">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="{{ get_theme_setting('twitter') }}">
                            <i class="icon-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="{{ get_theme_setting('linkedin') }}">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            <span class="sr-only">Linkedin</span>
                        </a>
                        <a href="{{ get_theme_setting('youtube') }}">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                            <span class="sr-only">Youtube</span>
                        </a>
                        <a href="{{ get_theme_setting('instagram') }}">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">instagram</span>
                        </a>
                    </div><!-- /.main-footer__social social-links -->
                    
                </div><!-- /.footer-widget -->
            </div><!-- /.col-xl-3 col-md-4 -->
        </div><!-- /.row gutter-y-40 -->
    </div><!-- /.container -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by MYDICM
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
    <img src="{{ url('/assets/frontend/images/shapes/footer-shape-1.png') }}" alt="shape" class="main-footer__shape-one">
    <img src="{{ url('/assets/frontend/images/shapes/footer-shape-2.png') }}" alt="shape" class="main-footer__shape-two">
    <img src="{{ url('/assets/frontend/images/shapes/footer-shape-3.png') }}" alt="shape" class="main-footer__shape-three">
    <img src="{{ url('/assets/frontend/images/shapes/footer-shape-4.png') }}" alt="shape" class="main-footer__shape-four">
    <img src="{{ url('/assets/frontend/images/shapes/footer-shape-5.png') }}" alt="shape" class="main-footer__shape-five">
</footer><!-- /.main-footer section-space-top -->

</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div><!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="icon-close"></i></span>
        <div class="logo-box logo-retina">
            <a href="{{ url('/') }}" aria-label="logo image">
                <img src="{{ url('assets/logo/logo.gif') }}" width="209" alt="" />
            </a>
        </div><!-- /.logo-box -->
        <div class="mobile-nav__container"></div><!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <span class="mobile-nav__contact__icon"><i class="fa fa-envelope"></i></span>
                <a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a>
            </li>
            <li>
                <span class="mobile-nav__contact__icon"><i class="fa fa-phone-alt"></i></span>
                <a href="tel:+{{ get_theme_setting('mobile') }}">+91 {{ get_theme_setting('mobile') }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social social-links-two">
            <a href="{{ get_theme_setting('facebook') }}">
                <span class="social-links-two__icon">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Facebook</span>
            </a>
            <a href="{{ get_theme_setting('twitter') }}">
                <span class="social-links-two__icon">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Twitter</span>
            </a>
            <a href="{{ get_theme_setting('instagram') }}">
                <span class="social-links-two__icon">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Instagram</span>
            </a>
            <a href="{{ get_theme_setting('youtube') }}">
                <span class="social-links-two__icon">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Youtube</span>
            </a>
        </div><!-- /.mobile-nav__social -->
    </div><!-- /.mobile-nav__content -->
</div><!-- /.mobile-nav__wrapper -->


<!-- /.search-popup -->