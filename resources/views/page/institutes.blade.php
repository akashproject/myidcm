@extends('layouts.main')
    @section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-header__content">
                <ul class="eduhive-breadcrumb list-unstyled">
                    <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="/">Home</a></li>
                    <li><span>{{ $contentMain->name}}</span></li>
                </ul><!-- /.eduhive-breadcrumb list-unstyled -->
                <h1 class="page-header__title mb-3">{{ $contentMain->name}}</h1>
                <p class="excerpt">
                    {{ $contentMain->excerpt}}
                </p>

            </div><!-- /.page-header__content -->
        </div><!-- /.container -->
        <img src="assets/frontend/images/shapes/page-header-shape-1.png" alt="shape" class="page-header__shape-one">
        <img src="assets/frontend/images/shapes/page-header-shape-2.png" alt="shape" class="page-header__shape-two">
        <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
        <div class="page-header__shape-four"></div><!-- /.page-header__shape-four -->
    </section><!-- /.page-header -->

    <section class="section-space">
        <div class="container">
            <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <h5> Institute Details </h5>
                <h3 class="sec-title__title"><span>Visit Our </span> <span class="sec-title__title__shape sec-title__title__text"> Institutes</span></h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
           
            <div class="row justified-content-center">
                @foreach(getInstitutes() as $value)
                <div class="col-md-4">
                    <div class="institute-container my-2">
                        <div class="institute-image {{ $value->featured_image }}">
                            <img src="{{ url('/assets/frontend/images/institutes/'.$value->slug.'.jpg') }}" class="width-100">
                        </div>
                        <div class="institute-content p-3">
                            <h4> {{ $value->name }} </h4>
                            <div class="content">
                                <i class="fas fa-map-marker mr-3" ></i><span class="mx-2"> {{ $value->address }} </span>
                            </div>
                            <div class="content">
                                <i class="fas icon-telephone mr-3" ></i><span class="mx-2"> {{ $value->mobile }} </span>
                            </div>
                            <div class="about-two__button wow fadeInUp mt-3" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <a href="#lead-generate-popup" class="eduhive-btn open-popup-link">
                                    <span>Book Visit</span>
                                    <span class="eduhive-btn__icon">
                                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                    </span>
                                </a><!-- /.eduhive-btn -->
                                <a href="{{ route('view-institute',$value->slug) }}" class="eduhive-btn">
                                    <span>Know More</span>
                                    <span class="eduhive-btn__icon">
                                        <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                                    </span>
                                </a><!-- /.eduhive-btn -->
                            </div><!-- /.about-two__button -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection