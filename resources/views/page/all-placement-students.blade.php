@extends('layouts.main')
    @section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-header__content">
                <ul class="eduhive-breadcrumb list-unstyled">
                    <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="index.html">Home</a></li>
                    <li><span>About us</span></li>
                </ul><!-- /.eduhive-breadcrumb list-unstyled -->
                <h2 class="page-header__title">{{ $contentMain->name }}</h2>
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->
        <img src="assets/frontend/images/shapes/page-header-shape-1.png" alt="shape" class="page-header__shape-one">
        <img src="assets/frontend/images/shapes/page-header-shape-2.png" alt="shape" class="page-header__shape-two">
        <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
        <div class="page-header__shape-four"></div><!-- /.page-header__shape-four -->
    </section><!-- /.page-header -->
    <section class="all-placed-student section-space">
        <div class="container">
            <div class="row">
                @foreach(getPlacements() as $placement)
                    <div class="col-md-4"> 
                        <div class="placed-student-container my-2">
                            <div class="placed-student-content text-white margin-20px-right">
                                <h6 class="margin-10px-bottom"> <strong>{{$placement->name }}</strong> </h6>
                                <p> Designation: Digital Marketing Intern</p>
                                <p> Placed At: Erudite</p>
                                <p> Joining Salary : 10,000</p>
                            </div>
                            <div class="student-image">                     
                                <img src="{{ getSizedImage($placement->featured_image) }}" alt="{{$placement->name }}" data-no-retina="">
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection