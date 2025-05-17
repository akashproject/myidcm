<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Media;
use App\Models\Institute;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        View::composer('*', function($view)
        {
            // Header Menu
            $institute = DB::table('institutes')->select('slug','name')->where("status","1")->get();
            $instituteArray = array();
            foreach ($institute as $key => $value) {
                $instituteArray['/institute/'.$value->slug] = $value->name;
            }
            $primaryMenu = array(
                array(
                    'url'=>'/institute',
                    'name' => "Institute",
                    'menu' => $instituteArray,
                ),
                array(
                    'url'=>'/about-us',
                    'name' => "About Us",
                ),
                array(
                    'url'=>'/placements',
                    'name' => "Placements",
                ),
                array(
                    'url'=>'/contact-us',
                    'name' => "Contact Us",
                ),
            );
            $view->with('primaryMenu', $primaryMenu);

            //info Menu
            $footerMenu = array(
                '/events' => 'Events',
                '/blog' => 'Blogs',
                '/awards-recognitions' => "Awards & Recognitions",
                '/about-us' => 'About Us',
                '/contact-us' => "Contact Us",
            );
            $view->with('footerMenu', $footerMenu);

            $courses = DB::table('courses')->where("status","1")->get();
            $view->with('courses', $courses);

            $media = Media::orderBy('created_at', 'desc')->get();
            $view->with('media', $media);

            $loggedInUser = Auth::user();
            $view->with('loggedInUser', $loggedInUser);

            if($loggedInUser){
                $roles = $loggedInUser
                ->roles
                ->pluck('name');
                $roles = implode(",",json_decode($roles));
                $view->with('roles', ucfirst($roles));
            }
        });
    }
}
