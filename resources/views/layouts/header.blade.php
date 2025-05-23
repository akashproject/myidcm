
<!-- Start of Header section
	============================================= -->
	<div class="home-main-header">
		<div class="topbar">
			<div class="container-fluid">
				<div class="topbar__inner">
					<ul class="list-unstyled topbar__info">
						<li>
							<span class="topbar__info__icon topbar__info__icon--email">
								<i class="icon-email"></i>
							</span>
							<a href="mailto:{{ get_theme_setting('email') }}">{{ get_theme_setting('email') }}</a>
						</li>
						<li>
							<span class="topbar__info__icon">
								<i class="icon-telephone"></i>
							</span>
							<a href="tel:{{ get_theme_setting('mobile') }}">+91 {{ get_theme_setting('mobile') }}</a>
						</li>
						
					</ul><!-- /.list-unstyled topbar__info -->
					<div class="topbar__social social-links">
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
					</div><!-- /.topbar__social social-links -->
				</div><!-- /.topbar__inner -->
			</div><!-- /.container-fluid -->
		</div><!-- /.topbar -->
		<header class="main-header main-header--two sticky-header sticky-header--normal">
			<div class="container-fluid">
				<div class="main-header__inner">
					<div class="main-header__left">
						<div class="main-header__logo logo-retina">
							<a href="{{ url('/') }}">
								<img src="{{ url('assets/logo/logo.gif') }}" alt="eduhive HTML" width="209">
							</a>
						</div><!-- /.main-header__logo -->
						<div class="main-header__courses">
                            <div class="main-header__courses__text">
                                <span class="main-header__courses__icon-list">
                                    <i class="icon-list"></i>
                                </span>
                                Courses
                                <span class="main-header__courses__icon-arrow">
                                    <i class="icon-chevron-down"></i>
                                </span>
                            </div><!-- /.main-header__courses__text -->
                            <ul class="main-header__courses__list">
								@foreach($courses as $course)
                                <li><a href="{{ route('view-courses',$course->slug) }}">{{ $course->name }}</a></li>
								@endforeach
                            </ul><!-- /.main-header__courses__list -->
                        </div>
					</div>
					
					<div class="main-header__right">
						<nav class="main-header__nav main-menu">
							<ul class="main-menu__list">
							@foreach($primaryMenu as $key => $menuItem)
								<li>
									<a href="{{ url($menuItem['url']) }}">{{ $menuItem['name'] }}</a>
									@if(isset($menuItem['menu']))
										<ul>
											@foreach($menuItem['menu'] as $key => $subMenu)
											<li><a href="{{ $key }}"> {{ $subMenu }}</a></li>
											@endforeach
										</ul>
									@endif
								</li>
							@endforeach
							</ul>
						</nav><!-- /.main-header__nav -->
						<div class="mobile-nav__btn mobile-nav__toggler">
							<span></span>
							<span></span>
							<span></span>
						</div><!-- /.mobile-nav__toggler -->
						<a href="#lead-generate-popup" class="main-header__btn eduhive-btn eduhive-btn--border open-popup-link">
							<span>Apply now</span>
							<span class="eduhive-btn__icon">
								<span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
							</span>
						</a>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</header><!-- /.main-header -->
	</div><!-- /.home-main-header -->
<!-- Start of Header section
	============================================= -->