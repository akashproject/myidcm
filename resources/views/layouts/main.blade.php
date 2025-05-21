<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute' }}</title>
    <meta name="DC.title" content="{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute' }}" />
    <meta name="geo.region" content="{{ isset($state->region)?$state->region:'' }}" />
    <meta name="geo.placename" content="{{ isset($contentMain->district)?$contentMain->district:'' }}" />
    <meta name="geo.position" content="{{ isset($contentMain->lat)?$contentMain->lat.';'.$contentMain->lng:'' }}" />
    <meta name="ICBM" content="{{ isset($contentMain->lat)?$contentMain->lat.','.$contentMain->lng:'' }}" />
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Accounts | GST | Tally | SAP | Learn accounts, finance, taxation, and banking job guarantee courses. Enroll with India&#039;s No.1 Educational Training Institute.' }}" />
    <meta name="facebook-domain-verification" content="he9zy5upymc72288m3qpcwda5dygul" />
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}">
    <meta name="robots" content="{{ isset($contentMain->robots)?$contentMain->robots:'' }}" />
    <meta name="google-site-verification" content="_Is7-guFC312LQs0E9yYfc90B7NW6Dx--HQZrLtBeLs" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="ICA Edu Skills" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute | Computerized Accounts Training Institute' }}" />
    <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Accounts | GST | Tally | SAP | Learn accounts, finance, taxation, and banking job guarantee courses. Enroll with India&#039;s No.1 Educational Training Institute.' }}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="https://www.facebook.com/ICAJobguarantee" />
    <meta property="og:image:secure_url" content="https://www.facebook.com/ICAJobguarantee" />
    <meta property="og:video" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
    <meta property="og:video:secure_url" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@IcaSkills" />
    <meta name="twitter:title" content="{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute | Computerized Accounts Training Institute' }}" />
    <meta name="twitter:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Accounts | GST | Tally | SAP | Learn accounts, finance, taxation, and banking job guarantee courses. Enroll with India&#039;s No.1 Educational Training Institute.' }}" />
    <meta name="twitter:creator" content="@IcaSkills" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="ica-admin" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="1 minute" />
    <!-- Css -->
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Alex+Brush&family=Cormorant:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/bootstrap-select/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/tiny-slider/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/eduhive-icons/style.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/owl-carousel/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/frontend/vendors/owl-carousel/css/owl.theme.default.min.css')}}" />
    <link  rel="stylesheet" href="{{ url('assets/frontend/css/eduhive.css') }}">

    @yield('style')    
    <script>
        let popUp = 1
	</script>
</head>

<body>
    <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <div class="preloader">
            <div class="preloader__image" style="background-image: url(/assets/frontend/images/idcm-loader.gif);"></div>
        </div>
        <!-- /.preloader -->
        <div class="page-wrapper">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
    
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
            <script src="{{ url('/assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
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
            <!-- template js -->
            <script src="{{ url('/assets/frontend/js/eduhive.js')}}"></script>
        </div>
</body>

</html>