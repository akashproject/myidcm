<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/index/clear-cache', function() {
    echo $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'administrator'], function () {

    Route::group(['middleware' => ['auth','role:super-admin|admin']], function () {
        Route::get('/', [App\Http\Controllers\Administrator\IndexController::class, 'dashboard'])->name('admin-dashboard');
        
        //Page
        Route::get('/pages', [App\Http\Controllers\Administrator\PageController::class, 'index'])->name('admin-pages');
        Route::get('/add-page', [App\Http\Controllers\Administrator\PageController::class, 'Add'])->name('admin-add-page');
        Route::get('/view-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'show'])->name('admin-view-page');
        Route::post('/save-page', [App\Http\Controllers\Administrator\PageController::class, 'save'])->name('admin-save-page');
        Route::get('/delete-page/{id}', [App\Http\Controllers\Administrator\PageController::class, 'delete'])->name('admin-delete-page');

        //AdPage
        Route::get('/ad-pages', [App\Http\Controllers\Administrator\AdPageController::class, 'index'])->name('admin-ad-pages');
        Route::get('/add-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'Add'])->name('admin-add-ad-page');
        Route::get('/view-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'show'])->name('admin-ad-view-page');
        Route::post('/save-ad-page', [App\Http\Controllers\Administrator\AdPageController::class, 'save'])->name('admin-sad-ave-page');
        Route::get('/delete-ad-page/{id}', [App\Http\Controllers\Administrator\AdPageController::class, 'delete'])->name('admin-ad-delete-page');

        //Institutes
        Route::get('/institutes', [App\Http\Controllers\Administrator\InstituteController::class, 'index'])->name('admin-institutes');
        Route::get('/add-institute', [App\Http\Controllers\Administrator\InstituteController::class, 'Add'])->name('admin-add-institute');
        Route::get('/view-institute/{id}', [App\Http\Controllers\Administrator\InstituteController::class, 'show'])->name('admin-show-institute');
        Route::post('/save-institute', [App\Http\Controllers\Administrator\InstituteController::class, 'save'])->name('admin-save-institute');
        Route::get('/delete-institute/{id}', [App\Http\Controllers\Administrator\InstituteController::class, 'delete'])->name('admin-delete-institute');
        Route::post('/get-city-by-state-id', [App\Http\Controllers\Administrator\InstituteController::class, 'getCitiesByStateId'])->name('get-city-by-state-id');
        Route::post('/center/get-center-by-pincode', [App\Http\Controllers\InstituteController::class, 'getCenterByPincode'])->name('get-center-by-pincode');

        //Courses
        Route::get('/courses', [App\Http\Controllers\Administrator\CourseController::class, 'index'])->name('admin-courses');
        Route::get('/add-course', [App\Http\Controllers\Administrator\CourseController::class, 'Add'])->name('admin-add-course');
        Route::get('/view-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'show'])->name('admin-show-course');
        Route::post('/save-course', [App\Http\Controllers\Administrator\CourseController::class, 'save'])->name('admin-save-course');
        Route::get('/delete-course/{id}', [App\Http\Controllers\Administrator\CourseController::class, 'delete'])->name('admin-delete-course');

        //Subjects
        Route::get('/subjects', [App\Http\Controllers\Administrator\SubjectController::class, 'index'])->name('admin-subjects');
        Route::get('/add-subject', [App\Http\Controllers\Administrator\SubjectController::class, 'Add'])->name('admin-add-subject');
        Route::get('/view-subject/{id}', [App\Http\Controllers\Administrator\SubjectController::class, 'show'])->name('admin-show-subject');
        Route::post('/save-subject', [App\Http\Controllers\Administrator\SubjectController::class, 'save'])->name('admin-save-subject');
        Route::get('/delete-subject/{id}', [App\Http\Controllers\Administrator\SubjectController::class, 'delete'])->name('admin-delete-subject');

        //Topics
        Route::get('/topics', [App\Http\Controllers\Administrator\TopicController::class, 'index'])->name('admin-topics');
        Route::get('/add-topic', [App\Http\Controllers\Administrator\TopicController::class, 'Add'])->name('admin-add-topic');
        Route::get('/view-topic/{id}', [App\Http\Controllers\Administrator\TopicController::class, 'show'])->name('admin-show-topic');
        Route::post('/save-topic', [App\Http\Controllers\Administrator\TopicController::class, 'save'])->name('admin-save-topic');
        Route::get('/delete-topic/{id}', [App\Http\Controllers\Administrator\TopicController::class, 'delete'])->name('admin-delete-topic');

        //Page
        Route::get('/placements', [App\Http\Controllers\Administrator\PlacementController::class, 'index'])->name('admin-placements');
        Route::get('/add-placement', [App\Http\Controllers\Administrator\PlacementController::class, 'Add'])->name('admin-add-placement');
        Route::get('/view-placement/{id}', [App\Http\Controllers\Administrator\PlacementController::class, 'show'])->name('admin-view-placement');
        Route::post('/save-placement', [App\Http\Controllers\Administrator\PlacementController::class, 'save'])->name('admin-save-placement');
        Route::get('/delete-placement/{id}', [App\Http\Controllers\Administrator\PlacementController::class, 'delete'])->name('admin-delete-placement');
       
        //Recruiters
        Route::get('/recruiters', [App\Http\Controllers\Administrator\RecruiterController::class, 'index'])->name('admin-recruiters');
        Route::get('/add-recruiter', [App\Http\Controllers\Administrator\RecruiterController::class, 'add'])->name('admin-add-recruiter');
        Route::get('/view-recruiter/{id}', [App\Http\Controllers\Administrator\RecruiterController::class, 'show'])->name('admin-show-recruiter');
        Route::post('/save-recruiter', [App\Http\Controllers\Administrator\RecruiterController::class, 'save'])->name('admin-save-recruiter');
        Route::get('/delete-recruiter/{id}', [App\Http\Controllers\Administrator\RecruiterController::class, 'delete'])->name('admin-delete-recruiter');

        //Testimonials
        Route::get('/testimonials', [App\Http\Controllers\Administrator\TestimonialController::class, 'index'])->name('admin-testimonials');
        Route::get('/add-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'add'])->name('admin-add-testimonial');
        Route::get('/view-testimonial/{id}', [App\Http\Controllers\Administrator\TestimonialController::class, 'show'])->name('admin-show-testimonial');
        Route::post('/save-testimonial', [App\Http\Controllers\Administrator\TestimonialController::class, 'save'])->name('admin-save-testimonial');
        Route::get('/delete-testimonial/{id}', [App\Http\Controllers\Administrator\TestimonialController::class, 'delete'])->name('admin-delete-testimonial');

        //Faqs
        Route::get('/faqs', [App\Http\Controllers\Administrator\FaqController::class, 'index'])->name('admin-faqs');
        Route::get('/add-faq', [App\Http\Controllers\Administrator\FaqController::class, 'add'])->name('admin-add-faq');
        Route::get('/view-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'show'])->name('admin-show-faq');
        Route::post('/save-faq', [App\Http\Controllers\Administrator\FaqController::class, 'save'])->name('admin-save-faq');
        Route::get('/delete-faq/{id}', [App\Http\Controllers\Administrator\FaqController::class, 'delete'])->name('admin-delete-faq');

        // Media Module
        Route::get('/media', [App\Http\Controllers\Administrator\MediaController::class, 'index'])->name('admin-media');
        Route::get('/view-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'view'])->name('admin-view-file');
        Route::post('/upload', [App\Http\Controllers\Administrator\MediaController::class, 'save'])->name('admin-save-media');
        Route::post('/save-file', [App\Http\Controllers\Administrator\MediaController::class, 'updateFile'])->name('admin-save-file');
        Route::get('/delete-file/{id}', [App\Http\Controllers\Administrator\MediaController::class, 'delete'])->name('admin-delete-file');
        Route::post('/search-media', [App\Http\Controllers\Administrator\MediaController::class, 'search'])->name('admin-search-media');
    
        Route::get('/settings', [App\Http\Controllers\Administrator\SettingController::class, 'show'])->name('admin-settings');
        Route::post('/save-settings', [App\Http\Controllers\Administrator\SettingController::class, 'save'])->name('admin-save-settings');
    });
});
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('website');
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'index'])->name('page-view')->where('slug', '([A-Za-z0-9\-]+)');
Route::get('/ads/{slug}', [App\Http\Controllers\AdPageController::class, 'index'])->name('ad-page-view')->where('slug', '([A-Za-z0-9\-]+)');
Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'view'])->name('view-courses');
Route::get('/institute/{slug}', [App\Http\Controllers\InstituteController::class, 'view'])->name('view-institute');

Route::post('/submit-mobile-otp', [App\Http\Controllers\IndexController::class, 'submitMobileOtp'])->name('submit-mobile-otp');
Route::post('/insert-lead-records', [App\Http\Controllers\IndexController::class, 'insertLeadRecord'])->name('insert-lead-records');
Route::post('/capture-lead', [App\Http\Controllers\IndexController::class, 'captureLead'])->name('capture-lead');
Route::post('/save-contact', [App\Http\Controllers\IndexController::class, 'saveContact'])->name('save-contact');


Route::get('/api/primary-menu', [App\Http\Controllers\ApiController::class, 'primaryMenu'])->name('api-primary-menu');
Route::get('/api/footer-menu', [App\Http\Controllers\ApiController::class, 'footerMenu'])->name('api-footer-menu');
Route::get('/api/courses', [App\Http\Controllers\ApiController::class, 'courses'])->name('api-courses');
Route::get('/api/institutes', [App\Http\Controllers\ApiController::class, 'institutes'])->name('api-institutes');