@extends('layouts.main')
    @section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-header__content">
                <ul class="eduhive-breadcrumb list-unstyled">
                    <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="index.html">Home</a></li>
                    <li><span>{{ $contentMain->name}}</span></li>
                </ul><!-- /.eduhive-breadcrumb list-unstyled -->
                <h2 class="page-header__title mb-3">{{ $contentMain->name}}</h2>
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

    <section>
        <div class="container">
            <div class="row">
                @foreach(getInstitutes() as $value)
                <div class="col-md-4">
                    <div class="institute-container">
                        <div class="institute-image">
                            <img src="https://dummyimage.com/350x200">
                        </div>
                        <div class="institute-content">
                            <h3> {{ $value->name }} </h3>
                            <div class="content">
                                {{ $value->state_id }}, {{ $value->city_id }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection