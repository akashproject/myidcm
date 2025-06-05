@extends('layouts.main')
  @section('content')
    <section class="page-header">
      <div class="container">
          <div class="page-header__content">
              <ul class="eduhive-breadcrumb list-unstyled">
                  <li><span class="eduhive-breadcrumb__icon"><i class="icon-home"></i></span><a href="{{ url('/') }}">Home</a></li>
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
    </section>
  
    <section class="courses-page section-space">
      <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
            <h3 class="sec-title__title"><span>Explore Our</span> <span class="sec-title__title__shape">Top-Rated</span> <span class="sec-title__title__text">Courses</span></h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
      </div><!-- /.container -->
      <div class="container">
        <div class="row gutter-y-30 justified-content-center" >
          @foreach(get_courses() as $value)
            <div class="col-md-4">
              <div class="course-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                  <div class="course-card__image">
                      <img src="{{ url('assets/frontend/images/courses/'.$value->slug.'.gif')}}" alt="The Data Science Revolution: Upgrading Your Skills">
                      
                  </div><!-- /.course-card__image -->
                  <div class="course-card__content">
                      <div class="course-card__content__top">
                          <div class="course-card__category">{{ $value->no_of_module }} lessons</div><!-- /.course-card__category -->
                          <div class="course-card__duration">
                              <span class="course-card__duration__icon">
                                  <i class="icon-clock"></i>
                              </span><!-- /.course-card__duration__icon -->
                              {{ $value->duration }} Months
                          </div><!-- /.course-card__duration -->
                      </div><!-- /.course-card__content__top -->
                      <h3 class="course-card__title"><a href="{{ route('view-courses',$value->slug) }}">{{ $value->name }}</a></h3><!-- /.course-card__title -->
                      <div class="course-card__info">
                          <div class="course-card__lessons">
                              <span class="course-card__lessons__icon">       
                                  <i class="icon-open-book"></i>
                              </span><!-- /.course-card__lessons__icon -->
                              {{ $value->no_of_module }} lessons
                          </div><!-- /.course-card__lessons -->
                          <div class="course-card__students">
                              <span class="course-card__students__icon">
                                  <i class="icon-multiple-users-silhouette"></i>
                              </span><!-- /.course-card__lessons__icon -->
                              {{ $value->number_of_enrolled }} Students
                          </div><!-- /.course-card__students -->
                      </div><!-- /.course-card__info -->
                  </div><!-- /.course-card__content -->
                  <div class="course-card__hover" style="background-image: url(assets/frontend/images/shapes/course-card-bg-1-1.png);">
                      <div class="course-card__hover__content">
                          <div class="course-card__content__top course-card__content__top--hover">
                              <div class="course-card__category">Experts</div><!-- /.course-card__category -->
                              <div class="course-card__duration">
                                  <span class="course-card__duration__icon">
                                      <i class="icon-clock"></i>
                                  </span><!-- /.course-card__duration__icon -->
                                  {{ $value->duration }} Months
                              </div><!-- /.course-card__duration -->
                          </div><!-- /.course-card__content__top -->
                          <h3 class="course-card__title course-card__title--hover"><a href="{{ route('view-courses',$value->slug) }}">{{ $value->name }}</a></h3><!-- /.course-card__title -->
                          <p class="course-card__text">{{ substr($value->excerpt, 0, 100) }}...</p><!-- /.course-card__text -->
                          <div class="course-card__ratings course-card__ratings--hover">
                              <div class="eduhive-ratings">
                                  <span class="eduhive-ratings__icon">
                                      <i class="fa fa-star"></i>
                                  </span><!-- /.eduhive-ratings__icon -->
                                  <span class="eduhive-ratings__icon">
                                      <i class="fa fa-star"></i>
                                  </span><!-- /.eduhive-ratings__icon -->
                                  <span class="eduhive-ratings__icon">
                                      <i class="fa fa-star"></i>
                                  </span><!-- /.eduhive-ratings__icon -->
                                  <span class="eduhive-ratings__icon">
                                      <i class="fa fa-star"></i>
                                  </span><!-- /.eduhive-ratings__icon -->
                                  <span class="eduhive-ratings__icon">
                                      <i class="fa fa-star"></i>
                                  </span><!-- /.eduhive-ratings__icon -->
                              </div><!-- /.product-ratings -->
                              <p class="course-card__ratings__text">( {{$value->number_of_rating}} ) Ratings</p><!-- /.course-card__ratings__text -->
                          </div><!-- /.course-card__ratings -->
                          <a href="#lead-generate-popup" class="course-card__btn eduhive-btn eduhive-btn--border open-popup-link">
                              <span>enroll now</span>
                              <span class="eduhive-btn__icon">
                                  <span class="eduhive-btn__icon__inner"><i class="icon-right-arrow"></i></span>
                              </span>
                          </a><!-- /.course-card__btn eduhive-btn -->
                          <div class="course-card__info course-card__info--hover">
                              <div class="course-card__lessons">
                                  <span class="course-card__lessons__icon">
                                      <i class="icon-open-book"></i>
                                  </span><!-- /.course-card__lessons__icon -->
                                  20 lessons
                              </div><!-- /.course-card__lessons -->
                              <div class="course-card__students">
                                  <span class="course-card__students__icon">
                                      <i class="icon-multiple-users-silhouette"></i>
                                  </span><!-- /.course-card__lessons__icon -->
                                  {{ $value->number_of_enrolled }} Students
                              </div><!-- /.course-card__students -->
                          </div><!-- /.course-card__info -->
                      </div><!-- /.course-card__hover__content -->
                  </div><!-- /.course-card__hover -->
              </div><!-- /.course-card -->
          </div><!-- /.item -->
          @endforeach
        </div>
      </div>
    </section>
  @endsection