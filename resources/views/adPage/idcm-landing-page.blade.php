<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($contentMain->title)?$contentMain->title:'IDCM: Institute of Digital & Content Marketing' }}</title>
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'IDCM, best digital marketing Institute in Delhi & Kolkata. Get 100% job assurance at affordable fees and 100% Industry Training. Book Your Free Demo Class Now.' }}" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta name="author" content="MyIdcm">
    <meta property="og:locale" content="en_IN" />
	<meta name="p:domain_verify" content="2757c24fbba370f3d146a24c9c17d66a"/>
	<meta name="google-site-verification" content="37KdQ39QcywGtqdFHMds0Q9LCbypRJICjnGKONQbLqU" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="IDCM: Institute of Digital & Content Marketing">
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="Institute of Digital & Content Marketing" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'IDCM: Institute of Digital & Content Marketing' }}" />
    <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'IDCM, best digital marketing Institute in Delhi & Kolkata. Get 100% job assurance at affordable fees and 100% Industry Training. Book Your Free Demo Class Now.' }}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@IDCM_dmtraining" />
    <meta name="twitter:title" content="{{ isset($contentMain->title)?$contentMain->title:'IDCM: Institute of Digital & Content Marketing' }}" />
    <meta name="twitter:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'IDCM, best digital marketing Institute in Delhi & Kolkata. Get 100% job assurance at affordable fees and 100% Industry Training. Book Your Free Demo Class Now.' }}" />
    <meta name="twitter:creator" content="@IDCM_dmtraining" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="admin" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="2 minute" />
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
    <!-- Fonts and Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Alex+Brush&family=Cormorant:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/bootstrap-select/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/tiny-slider/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/eduhive-icons/style.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/owl-carousel/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/owl-carousel/css/owl.theme.default.min.css')}}" />
    <link  rel="stylesheet" href="{{ url('assets/frontend/css/ad-style.css') }}">
    <link  rel="stylesheet" href="{{ url('assets/frontend/css/eduhive.css') }}">
    @yield('style')    
    <script>
        let popUp = 1
	</script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TR496XN');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://web.archive.org/web/20250514003503if_/https://www.googletagmanager.com/ns.html?id=GTM-TR496XN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->  
     
    <div class="page-wrapper">
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
							<a href="mailto:info@myidcm.com">info@myidcm.com</a>
						</li>
						<li>
							<span class="topbar__info__icon">
								<i class="icon-telephone"></i>
							</span>
							<a href="tel:8335011110">+91 8335011110</a>
						</li>
						
					</ul><!-- /.list-unstyled topbar__info -->
					<div class="topbar__social social-links">
						<a href="https://www.facebook.com/Instituteofdigitalandcontentmarketing/">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
							<span class="sr-only">Facebook</span>
						</a>
						<a href="https://twitter.com/IDCM_dmtraining">
							<i class="icon-twitter" aria-hidden="true"></i>
							<span class="sr-only">Twitter</span>
						</a>
						<a href="https://www.linkedin.com/company/idcm-institute-of-digital-content-marketing/">
							<i class="fab fa-linkedin-in" aria-hidden="true"></i>
							<span class="sr-only">Linkedin</span>
						</a>
						<a href="https://www.youtube.com/channel/UCCrUO2AR1hNsT8uimO3q6Rg/videos?view=0&amp;sort=p&amp;flow=grid">
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
							<a href="https://www.myidcm.com">
								<img src="https://www.myidcm.com/assets/logo/logo.gif" alt="eduhive HTML" width="209">
							</a>
						</div><!-- /.main-header__logo -->
					</div>
					
					<div class="main-header__right">
						<div class="mobile-nav__btn mobile-nav__toggler">
							<span></span>
							<span></span>
							<span></span>
						</div><!-- /.mobile-nav__toggler -->
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</header><!-- /.main-header -->
	</div><!-- /.home-main-header -->
<!-- Start of Header section
	============================================= -->        

<div class="main-banner" style="background-image: url(/assets/frontend/images/landing-banner-back.webp);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 text-center text-lg-start">
                <h2 class="mb-4 fs-1 fw-bold">Best Digital Marketing Courses In India</h2>
                <h6 class="text-black">Join the Top Digital Marketing Courses offering hands-on training in India.</h6>
                <h6 class="text-black fw-bold my-3">Online or Offline. Choose What Works for You.</h6>
                <h6 class="text-black">Learn from Industry Experts from brands like</h6>

                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                        </div>
                    </div>
                </div>

                <div class="info-banner mt-4">
                    <div class="info-item">4 - 11 Month<br>Programs</div>
                    <div class="info-item">100% Placement<br>Support</div>
                    <div class="info-item">Govt.<br>Recognised<br>Certifications</div>
                </div>

                <a href="#" class="btn btn-landing mt-lg-5 mt-4">Choose The Right Course</a>
                <a href="#" class="btn btn-landing mt-lg-5 mt-4">Download Placement Report</a>

            </div>
            <div class="col-xl-5 my-4 text-center">
                <div class="video-thumbnail">
                    <img src="https://placehold.co/400x400" alt="Video" class="img-fluid">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section-certificates">
    <div class="container">
        <div class="row justified-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h6>Whatever your career goal in digital, we’ve got your back</h6>
                    <h3 class="text-highlight fw-bold">Outcomes That Speak Louder Than <span>Certificates</span></h3>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="number-box">
                            <h2>99<span>%</span></h2>
                            <p>Placements Rate</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="number-box">
                            <h2>350<span>+</span></h2>
                            <p>Hiring Partners</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="number-box">
                            <h2>40<span>%</span></h2>
                            <p>Avg Salary Hike</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="container py-5">
                            <div class="owl-carousel owl-theme student-slider">
                                <!-- Slide 1 -->
                                <div class="card rounded-4">
                                <img src="https://placehold.co/600x450" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="card-title mb-0">Sthita Patnaik</h5>
                                        <p class="card-text mb-0">works at</p>
                                    </div>
                                    <div>
                                        <img src="https://placehold.co/100x20" alt="...">
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="card rounded-4">
                                <img src="https://placehold.co/600x450" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="card-title mb-0">Rahul Verma</h5>
                                        <p class="card-text mb-0">works at</p>
                                    </div>
                                    <div>
                                        <img src="https://placehold.co/100x20" alt="...">
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="card rounded-4">
                                    <img src="https://placehold.co/600x450" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h5 class="card-title mb-0">Neha Gupta</h5>
                                            <p class="card-text mb-0">works at</p>
                                        </div>
                                        <div>
                                            <img src="https://placehold.co/100x20" alt="...">
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 4 -->
                                <div class="card rounded-4">
                                    <img src="https://placehold.co/600x450" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h5 class="card-title mb-0">Neha Gupta</h5>
                                            <p class="card-text mb-0">works at</p>
                                        </div>
                                        <div>
                                            <img src="https://placehold.co/100x20" alt="...">
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justified-content-center">
            <div class="col-lg-8">
                <div class="text-center my-5">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit</h6>
                    <h3 class="text-black fw-bold mt-3 mb-4">Our Alumni work with <span class="text-primary">Brands Like</span></h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eius temporibus, vitae obcaecati, exercitationem non provident ipsam autem a sed delectus recusandae aliquam ipsa dolorum natus, assumenda et maiores commodi.</p>                
                </div>
                <div class="row row-cols-2 row-cols-md-5 g-4">
                    <div class="slider-container">
                        <div class="slider-track" id="logo-track">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <!-- duplicated for seamless scroll -->
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                        </div>
                    </div>
                    <div class="slider-left">
                        <div class="slider-track-left" id="logo-track">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <!-- duplicated for seamless scroll -->
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                            <img src="https://placehold.co/150x70" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-landing mt-5">Download Placement Report</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="container">
        <div class="row justified-content-center">
            <div class="col-lg-11">
                <div class="text-center mb-5">
                    <h6>See what suits your learning style, schedule & career path</h6>
                    <h3 class="text-highlight fw-bold">Which Digital Marketing Course is <span>Right for You?</span></h3>
                </div>
                
                <div class="row mt-4">
                    <div class="col-xl-4 col-md-6">
                        <div class="my-4">
                            <div class="card rounded-4 overflow-hidden">
                                <img src="https://placehold.co/600x450" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h4 class="strategy-title">OFFLINE ON-CAMPUS</h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="item">
                                            <h5 class="card-title mb-0 fs-6 fw-semibold">Post Graduate Program in Digital Marketing & Strategy</h5>
                                            <ul class="basic-list mt-4">
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                            </ul>
                                            <a href="#" class="btn btn-landing mt-4 w-100">Download Brochure</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="my-4">
                            <div class="card rounded-4 overflow-hidden">
                                <img src="https://placehold.co/600x450" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h4 class="strategy-title">LIVE & ONLINE</h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="item">
                                            <h5 class="card-title mb-0 fs-6 fw-semibold">Post Graduate Program in Digital Marketing & Strategy</h5>
                                            <ul class="basic-list mt-4">
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                                <li><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">11 months, immersive + offline</li>
                                            </ul>
                                            <a href="#" class="btn btn-landing mt-4 w-100">Download Brochure</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="my-4">
                            <div class="form-box">
                                <h5>Your Future in Digital Starts with a Conversation</h5>
                                <p class="text-center mb-3">Speak to our Expert Counsellor</p>

                                <form>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Select course">
                                    <option selected disabled>Select the course</option>
                                    <option value="1">Digital Marketing</option>
                                    <option value="2">Performance Marketing</option>
                                    <option value="3">SEO & Analytics</option>
                                    </select>
                                </div>

                                <div class="mb-2 d-flex align-items-center">
                                    <span class="input-group-text px-3" style="border-radius: 8px 0 0 8px;">🇮🇳 +91</span>
                                    <input type="tel" class="form-control" placeholder="Enter phone number" style="border-radius: 0 8px 8px 0;">
                                </div>

                                <p class="whatsapp-note">You will receive updates on WhatsApp</p>

                                <p class="or-divider">or</p>

                                <a href="#" class="continue-email">Continue with Email</a>

                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="terms" checked>
                                    <label class="form-check-label" for="terms">
                                    I agree to IIDE's <a href="#">T&C</a> and <a href="#">Privacy Policy</a>.
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-disabled proceed-btn" disabled>Proceed</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-outcomes">
    <div class="container">
        <div class="row justified-content-center">
            <div class="col-lg-11">
                <div class="text-center mb-5">
                    <h6>See what suits your learning style, schedule & career path</h6>
                    <h3 class="text-highlight fw-bold">Which Digital Marketing Course is <span>Right for You?</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card-container">
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+1" alt="Card 1">
                    <div class="text-overlay">Demo Text 1</div>
                    </div>
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+2" alt="Card 2">
                    <div class="text-overlay">Demo Text 2</div>
                    </div>
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+3" alt="Card 3">
                    <div class="text-overlay">Demo Text 3</div>
                    </div>
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+4" alt="Card 4">
                    <div class="text-overlay">Demo Text 4</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="#" class="btn btn-landing mt-5">Start Your Digital Marketing Journey Now!</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-tools">
    <div class="container">
        <div class="row justified-content-center">
            <div class="col-lg-9">
                <div class="text-center">
                    <h6>Learn the Tools That Power the Digital Marketing Industry</h6>
                    <h3 class="text-highlight fw-bold mt-3 mb-4">Master 20+ AI-Powered Tools That Run the <span>Digital World</span></h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eius temporibus, vitae obcaecati, exercitationem non provident ipsam autem a sed delectus recusandae aliquam ipsa dolorum natus, assumenda et maiores commodi.</p>                
                </div>
                <div class="row row-cols-2 row-cols-md-5 g-4">
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                    <div class="col">
                        <img src="https://placehold.co/150x70" alt="" class="img-fluid border rounded-2">
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-landing mt-5">Choose The Right Course</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-outcomes">
    <div class="container">
        <div class="industry-bar" style="background-image: url(/assets/frontend/images/learn-froem.webp);">
            <div class="row align-items-center">
                <div class="col-xl-3 col-md-4">
                    <img src="/assets/frontend/images/learn-from.webp" alt="" class="img-fluid left-img">
                </div>
                <div class="col-xl-6 col-md-4">
                    <h2 class="text-white">Learn From Top Industry Leaders</h2>
                </div>
                <div class="col-xl-3 col-md-4">
                    <a href="#" class="btn btn-light rounded-pill px-4 py-3">Choose The Right Course</a>
                </div>
            </div>
        </div>
        
        <div class="row justified-content-center">
            <div class="col-lg-11">
                <div class="text-center mb-5">
                    <h6>See what suits your learning style, schedule & career path</h6>
                    <h3 class="text-highlight fw-bold">Which Digital Marketing Course is <span>Right for You?</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card-container">
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+1" alt="Card 1">
                    <div class="text-overlay">Demo Text 1</div>
                    </div>
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+2" alt="Card 2">
                    <div class="text-overlay">Demo Text 2</div>
                    </div>
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+3" alt="Card 3">
                    <div class="text-overlay">Demo Text 3</div>
                    </div>
                    <div class="card">
                    <img src="https://placehold.co/400x500?text=Card+4" alt="Card 4">
                    <div class="text-overlay">Demo Text 4</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="#" class="btn btn-landing mt-5">Download Detailed Trainers List</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-digital-marketing">
    <div class="container">
        <div class="row justified-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h6>From fundamentals to strategy - build a complete digital foundation</h6>
                    <h3 class="text-highlight fw-bold mt-3 mb-4">Everything You Need to Know in <span>Digital Marketing</span></h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eius temporibus, vitae obcaecati, exercitationem non provident ipsam autem a sed delectus recusandae aliquam ipsa dolorum natus, assumenda et maiores commodi.</p>                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12 my-4">
                <div class="marketing-box text-center">
                    <img src="https://placehold.co/70x70" alt="" class="img-fluid mb-3">
                    <h4 class="mb-3">Creative <br> Marketing</h4>
                    <p>Learn storytelling, content strategy & social media that actually gets shared.</p>
                    <a href="#" class="info-link">More Info</a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 my-4">
                <div class="marketing-box text-center">
                    <img src="https://placehold.co/70x70" alt="" class="img-fluid mb-3">
                    <h4 class="mb-3">Creative <br> Marketing</h4>
                    <p>Learn storytelling, content strategy & social media that actually gets shared.</p>
                    <a href="#" class="info-link">More Info</a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 my-4">
                <div class="marketing-box text-center">
                    <img src="https://placehold.co/70x70" alt="" class="img-fluid mb-3">
                    <h4 class="mb-3">Creative <br> Marketing</h4>
                    <p>Learn storytelling, content strategy & social media that actually gets shared.</p>
                    <a href="#" class="info-link">More Info</a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 my-4">
                <div class="marketing-box text-center">
                    <img src="https://placehold.co/70x70" alt="" class="img-fluid mb-3">
                    <h4 class="mb-3">Creative <br> Marketing</h4>
                    <p>Learn storytelling, content strategy & social media that actually gets shared.</p>
                    <a href="#" class="info-link">More Info</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-person">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 my-4">
                <h6>Talk to us in-person</h6>
                <h3 class="text-highlight fw-bold mt-3 mb-4">Get the IIDE Campus <span>Experience</span></h3>
                <p class="text-black">Walk into your nearest IIDE Campus for a free 1:1 session</p>
                <p class="text-black">Chat with an expert about your career in digital</p>
                <p class="text-black">Experience the campus vibe before you commit</p>
                <a href="#" class="btn btn-landing mt-2">Book a Campus Visit</a>
            </div>
            <div class="col-lg-7 my-4">
                <img src="https://placehold.co/700x360" alt="" class="img-fluid rounded-4">
            </div>
        </div>
    </div>
</section>

<section class="section-industry">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 my-4">
                <div class="sticky-top" data-sticky>
                    <h2 class="text-highlight mb-4">The Marketing Industry Moves Fast. <span>We Help You Move Faster.</span></h2>
                    <p class="text-black">From fundamentals to advanced strategy — IIDE’s courses are designed to keep your skills sharp and your career future-ready.</p>
                    <a href="#" class="btn btn-landing mt-2">Book a Campus Visit</a>
                </div>
            </div>
            <div class="col-lg-7 my-4">
                <div class="trend-bar border-bottom pb-5">
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <img src="https://placehold.co/70x70" alt="..." class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Unlock 25,000+ Case Studies & Trend Reports</h4>
                            <p class="text-black">Global award winning case studies, reports, and research papers through WARC — 
                            including the most iconic Cannes Lions campaigns.
                            <span class="more-text" style="display: none;">
                                Here you can add more details, extra content, or hidden description.
                            </span>
                            <a href="javascript:void(0);" class="read-more">Read more</a>
                            </p>
                        </div>
                    </div>
                    <img src="https://placehold.co/750x200" alt="..." class="img-fluid">
                </div>
                <div class="trend-bar border-bottom py-5">
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <img src="https://placehold.co/70x70" alt="..." class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Unlock 25,000+ Case Studies & Trend Reports</h4>
                            <p class="text-black">Global award winning case studies, reports, and research papers through WARC — including the most iconic Cannes Lions campaigns.</p>
                        </div>
                    </div>
                    
                    <div class="img-container">
                        <div class="img-track" id="logo-track">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                            <img src="https://placehold.co/300x200" alt="logo">
                        </div>
                    </div>    


                </div>
                <div class="trend-bar py-5">
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <img src="https://placehold.co/70x70" alt="..." class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4>Unlock 25,000+ Case Studies & Trend Reports</h4>
                            <p class="text-black">Global award winning case studies, reports, and research papers through WARC — including the most iconic Cannes Lions campaigns.</p>
                        </div>
                    </div>
                    <div class="img-container">
                        <div class="img-track" id="logo-track">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                            <img src="https://placehold.co/200x200" alt="logo">
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-program-fees position-relative">
    <div class="container">
        <div class="industry-bar" style="background-image: url(/assets/frontend/images/learn-froem.webp);">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-3 col-md-4">
                    <img src="/assets/frontend/images/learn-from2.webp" alt="" class="img-fluid left-img">
                </div>
                <div class="col-xl-5 col-md-4 text-center">
                    <h2 class="text-white">Experience the IIDE Culture</h2>
                </div>
                <div class="col-xl-2 col-md-4 float-end">
                    <a href="#" class="btn btn-light rounded-pill px-4 py-3">Know More</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
                <h2>Digital Marketing Program <span>Fees</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                        11 Months Offline Digital Marketing & Strategy Course
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                        4-6 Months Online Digital Marketing Course
                    </label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fees-bar text-center">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="text-black">Duration</h6>
                            <h4>4-6 Months</h4>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="text-black">EMI starts as low as</h6>
                            <h4 class="fw-bold">₹ 8,273 / Month</h4>
                        </div>
                    </div>
                    <div class="d-flex mt-4 align-items-center">
                        <div class="item col-4">EMI Partner:</div>
                        <div class="item col-4"><img src="https://placehold.co/100x50" alt="..." class="img-fluid"></div>
                        <div class="item col-4"><img src="https://placehold.co/100x50" alt="..." class="img-fluid"></div>
                    </div>
                    <a href="#" class="btn btn-landing my-4">Get Fees and Financial Plan</a>
                    <p class="text-black">No cost EMI and flexible 6, 9, or 12 monthly plans available.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <h2 class="text-highlight">#1 Choice of Learners When They <span>Searched For</span></h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-xl-6">
                        <ul class="basic-list mt-4">
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Course In Bangalore</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Performance Marketing Online Course</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Course In India</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Course In Jaipur</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Institute In Hyderabad</li>
                        </ul>
                    </div>
                    <div class="col-xl-6">
                        <ul class="basic-list mt-4">
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Course In Bangalore</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Performance Marketing Online Course</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Course In India</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Course In Jaipur</li>
                            <li class="mb-4 text-black"><img src="/assets/frontend/images/check-line.svg" alt="" class="img-fluid">Online Digital Marketing Institute In Hyderabad</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="owl-carousel owl-theme testimonial-slider">
                    <div class="comments-bar">
                        <h2>❝</h2>
                        <p>IIDE’s curriculum was hands-on and up-to-date with current trends. The team supported me from learning to placement. I landed a job within a month after completing the course!</p>
                        <hr />
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/50x50" alt="Ananya" class="img-fluid me-2 rounded-circle" />
                            <strong>Ananya Sharma</strong>
                        </div>
                    </div>

                    <div class="comments-bar">
                        <h2>❝</h2>
                        <p>Thanks to IIDE, I not only gained skills but also the confidence to work in digital marketing professionally!</p>
                        <hr />
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/50x50" alt="Ravi" class="img-fluid me-2 rounded-circle" />
                            <strong>Ravi Mehra</strong>
                        </div>
                    </div>

                    <div class="comments-bar">
                        <h2>❝</h2>
                        <p>The placement support and mentorship were excellent. I highly recommend this program for career changers.</p>
                        <hr />
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/50x50" alt="Priya" class="img-fluid me-2 rounded-circle" />
                            <strong>Priya Nair</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-faq">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12 text-center">
                <h2 class="text-highlight">Frequently Asked <span>Questions</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="container faq-wrapper">
                    <div class="row">
                        <!-- Left Side Navigation -->
                        <div class="col-md-4 faq-left">
                            <div class="faq-nav">
                                <button class="active" data-tab="tab1">Online Digital Marketing Courses</button>
                                <button data-tab="tab2">Offline Digital Marketing Program</button>
                            </div>
                        </div>

                        <!-- Right Side FAQ -->
                        <div class="col-md-8">
                            <!-- Tab 1 Content -->
                            <div class="accordion-box tab-content" id="tab1" style="display: block;">
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. Is a postgraduate program in digital marketing worth it? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">Absolutely. A PG in digital marketing offers in-depth knowledge, hands-on experience, and improves your chances of landing managerial roles in the digital space.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. What is the starting salary after a PG in Digital Marketing? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">The starting salary can range between ₹3.5 LPA to ₹7 LPA, depending on your skills, experience, and location.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. What is the fee for IIDE’s Post Graduation in Digital Marketing & Strategy Program? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">The fee for the program is ₹5,95,000 inclusive of taxes. Easy EMI options are available.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. What is the starting salary after a PG in Digital Marketing? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">The starting salary can range between ₹3.5 LPA to ₹7 LPA, depending on your skills, experience, and location.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. What is the fee for IIDE’s Post Graduation in Digital Marketing & Strategy Program? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">The fee for the program is ₹5,95,000 inclusive of taxes. Easy EMI options are available.</div>
                                </div>
                            </div>

                            <!-- Tab 2 Content -->
                            <div class="accordion-box tab-content" id="tab2" style="display: none;">
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. Does IIDE provide scholarships for their PG in Digital Marketing & Strategy Program? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">Yes, IIDE offers scholarships based on merit and need, with amounts ranging up to ₹1,00,000.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. What are the placement opportunities after this Post Graduation in Digital Marketing? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">IIDE has a dedicated placement cell and partners with 250+ companies for guaranteed interview opportunities.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. Where are the offline centers located? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">Our centers are located in Mumbai, Delhi, Bangalore, and Pune with well-equipped classrooms.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. What are the placement opportunities after this Post Graduation in Digital Marketing? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">IIDE has a dedicated placement cell and partners with 250+ companies for guaranteed interview opportunities.</div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-title">Q. Where are the offline centers located? <span class="accordion-icon">▼</span></div>
                                    <div class="accordion-content">Our centers are located in Mumbai, Delhi, Bangalore, and Pune with well-equipped classrooms.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-landig-about">
    <div class="container">
        <div class="industry-bar" style="background-image: url(/assets/frontend/images/learn-froem.webp);">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-3 col-md-4">
                    <img src="/assets/frontend/images/why-do.png" alt="" class="img-fluid left-img">
                </div>
                <div class="col-xl-6 col-md-4">
                    <h2 class="text-white">Why Do Students Choose IIDE?</h2>
                </div>
                <div class="col-xl-2 col-md-3 float-end">
                    <a href="#" class="btn btn-light rounded-pill px-4 py-3">Find Out</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="about-heading">About IIDE</h2>
                <p class="text-black">Founded in 2016, IIDE stands at the forefront of digital marketing education in India. With award-winning campuses in Mumbai and Delhi and a thriving online platform, IIDE has become the preferred learning destination for over 500,000 students and professionals seeking digital marketing excellence.</p>
                <p class="text-black">Recognised as the “Best Institute for Digital Marketing of the Year” by World Education Summit 2024, IIDE is consistently the first name that appears when searching for digital marketing courses in Mumbai, best digital marketing institute in Delhi, or top digital marketing online courses. Our reputation is built on deep industry integration, real-world skills, and a forward-thinking approach to digital marketing careers.</p>
                <p class="text-black">IIDE empowers aspiring professionals to launch and lead successful digital-first careers, shaping the next generation of digital leaders. Our mission is to enable ambitious individuals to transform their passion into rewarding, future-ready digital careers.</p>
                <p class="text-black">We’re proud that aspiring marketers searching for the best digital marketing courses in Mumbai, leading digital marketing institutes in Delhi NCR, digital marketing course fees, or an MBA in digital marketing repeatedly place their trust in IIDE. Our commitment to innovation, quality, and individual growth sets the benchmark for digital marketing education in India.</p>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer section-space-top">
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
    <div id="lead-generate-popup" class="white-popup mfp-hide">
        @include('common.leadCaptureForm')
    </div>
</div><!-- /.page-wrapper -->

    <script>
        let globalUrl = "{{ env("APP_URL") }}"
        let isEnableOtp = {{ (get_theme_setting('enable_otp') == "1")?get_theme_setting('enable_otp'):$contentMain->enable_otp }}
        let isAjaxSubmit = "{{ get_theme_setting('ajax_submit') }}"
    </script>

    <script src="{{ url('/assets/frontend/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/owl-carousel/js/owlcarousel2-filter.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/owl-carousel/js/owlcarousel2-progressbar.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/wow/wow.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ url('/assets/frontend/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ url('assets/frontend/vendors/jquery-circleType/jquery.circleType.js')}}"></script>
    <script src="{{ url('/assets/frontend/vendors/jquery-lettering/jquery.lettering.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/HichemTab-tech/OTP-designer-jquery@2.0.1/dist/otpdesigner.min.js"></script>
    <!-- template js -->
    <script src="{{ url('/assets/frontend/js/eduhive.js')}}"></script>
</body>

</html>