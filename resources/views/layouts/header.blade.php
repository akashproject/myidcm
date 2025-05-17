
<!-- Start of Header section
	============================================= -->
	<div class="home-main-header">
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
						<a href="#" class="search-toggler main-header__search">
							<i class="icon-search" aria-hidden="true"></i>
							<span class="sr-only">Search</span>
						</a><!-- /.search-toggler -->
						<a href="contact.html" class="main-header__btn eduhive-btn eduhive-btn--border">
							<span>Apply now</span>
							<span class="eduhive-btn__icon">
								<span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
							</span>
						</a><!-- /.main-header__btn eduhive-btn -->
					</div><!-- /.main-header__right -->
				</div><!-- /.main-header__inner -->
			</div><!-- /.container-fluid -->
		</header><!-- /.main-header -->
	</div><!-- /.home-main-header -->
<!-- Start of Header section
	============================================= -->