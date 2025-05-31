<?php

use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;
use App\Models\Setting;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\State;
use App\Models\City;

if (! function_exists('check_device')) {
    function check_device($param = null){
        $device = "";
        switch ($param) {
            case 'desktop':
                $device = Agent::isDesktop();
                break;
            case 'tablet':
                $device = Agent::isTablet();
            case 'mobile':
                $device = Agent::isPhone();
                break;
            case 'os':
                $device = Agent::device();
                break;
        }
        
        return $device;
    }
}

if (! function_exists('getSizedImage')) {
    function getSizedImage($id,$size = null) {
        $size = ($size)?$size.'_':"";
        $media = DB::table('media')->where('id',$id)->first();
        if($media){
            $filename = env('APP_URL').$media->path.'/'.$size.$media->filename;
            return $filename;
            //return $filename = env('APP_URL').$media->path.'/'.$size.$media->filename;
        } else {
            return false;
        }
    }
}

if (! function_exists('getAttachmentUrl')) {
    function getAttachmentUrl($id) {
        $media = DB::table('media')->where('id',$id)->first();
        if($media){
            return $filename = env('APP_URL').$media->path.'/'.$media->filename;
        } else {
            return false;
        }
    }
}

if (! function_exists('thousandsCurrencyFormat')) {
    function thousandsCurrencyFormat($num) {
        if($num>1000) {
            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array('k', 'm', 'b', 't');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];
            return $x_display;
        }
        return $num;
    }
}

if (! function_exists('get_theme_setting')) {
    function get_theme_setting($value){
        $media = Setting::where('key',$value)->first();
        return (isset($media->value))?$media->value:"null";
    }
}

if (! function_exists('get_courses')) {
    function get_courses(){
        $value = Course::where('status','1')->get();
        return (isset($value))?$value:"null";
    }
}

if (! function_exists('getCourseById')) {
    function getCourseById($id){
        $value = Course::where('id',$id)->first();
        return (isset($value))?$value:"null";
    }
}

if (! function_exists('getSubjects')) {
    function getSubjects(){
        $value = Subject::where('status','1')->get();
        return (isset($value))?$value:"null";
    }
}

if (! function_exists('getSubjectsByCourseId')) {
    function getSubjectsByCourseId($subjects){
        $value = Subject::whereIn('id',json_decode($subjects))->where('status','1')->get();
        return (isset($value))?$value:"null";
    }
}

if (! function_exists('getTopicsBySubjectId')) {
    function getSubjectsBySubjectId($subject_id){
        $value = Topic::where('subject_id',$subject_id)->where('status','1')->get();
        return (isset($value))?$value:"null";
    }
}

if (! function_exists('getAllFaqs')) {
    function getAllFaqs(){
        $faq = DB::table('faqs')->where('status',"1")->get();
        return $faq;
    }
}

if (! function_exists('getFaqsById')) {
    function getFaqsById($faqs){
        $faq = DB::table('faqs')->whereIn('id',json_decode($faqs))->where('status',"1")->get();
        return $faq;
    }
}

if (! function_exists('getTestimonials')) {
    function getTestimonials(){
        $faq = DB::table('testimonials')->where('status',"1")->get();
        return $faq;
    }
}

if (! function_exists('getStates')) {
    function getStates(){
        try {
            $states = State::where('status', 1)->orderBy("name","asc")->get();
            return $states;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getStateById')) {
    function getStateById($id){
        try {
            $state = State::findOrFail($id);
            return $state;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getCityById')) {
    function getCityById($id){
        try {
            $city = DB::table('cities')->where('id',$id)->first();
            return $city;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getCitiesByStateName')) {
    function getCitiesByStateName($state){
        try {
            $cities = DB::table('cities')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->where('states.name',$state)
            ->select('cities.*')
            ->get();
            return $cities;
        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
    }
}

if (! function_exists('getInstitutes')) {
    function getInstitutes($course_id=null, $institute_id=null){    
        $institutes = Cache::rememberForever('institutes', function () use ($course_id,$institute_id){
            $institutes = DB::table('institutes');
            if($course_id){
                $institutes->where('courses','like', '%"' . $course_id . '"%');
            } 
            if($institute_id){
                $institutes->where('id',$institute_id);
            } 
            
            if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
                $institutes->orderBy(DB::raw('POW((lng-'.$_COOKIE['lng'].'),2) + POW((lat-'.$_COOKIE['lat'].'),2)'));
            } else {
                $institutes->orderBy("name","asc");
            }
            $institutes = $institutes->where('status',"1");
            return $institutes->get();     
        });
        return $institutes;
    }
}

if (!function_exists('getCenterByCityId')) {
    function getCenterByCityId($city = null,$centername = null){
        $center = DB::table('centers')
                ->join('cities', 'cities.id', '=', 'centers.city_id')
                ->select('centers.id','centers.name');
        if($city){
            $center->where('cities.name',$city);
        }

        if($centername){
            $center->where('centers.name',$centername);
        }

        $center->where('centers.status','1');
        $center = $center->get();       
        return $center;
    }
}

if (!function_exists('getCenterById')) {
    function getCenterById($center_id = null){
        $center = DB::table('centers');
        if($center_id){
            $center->where('id',$center_id);
        }
        $center = $center->first();       
        return $center;
    }
}

if (!function_exists('getCenterByStateId')) {
    function getCenterByStateId($state = null,$centername = null){
        $center = DB::table('centers')
                ->join('states', 'states.id', '=', 'centers.state_id')
                ->select('centers.id','centers.name');
        if($state){
            $center->where('states.name',$state);
        }

        if($centername){
            $center->where('centers.name',$centername);
        }

        $center->where('centers.status','1');
        $center = $center->orderBy('name', 'asc')->get();       
        return $center;
    }
}

if (! function_exists('getGallery')) {
    function getGallery($course_id=null, $center_id=null){
        $gallery = DB::table('gallery');
        if($center_id){
            $gallery->where("center_id",$center_id);
        } 
        $gallery = $gallery->get();       
        return $gallery;
    }
}

if (! function_exists('getRecruters')) {
    function getRecruiters(){
        $recruiters = DB::table('recruiters')->get();
        return $recruiters;
    }
}

if (! function_exists('getPlacements')) {
    function getPlacements($limit = 1000){
        $placements = DB::table('placements')->limit($limit)->inRandomOrder()->get();
        return $placements;
    }
}

if (! function_exists('getUtmCampaign')) {
    function getUtmCampaign($params = null){
        if(request()->has('utm_campaign')){
            return request()->get('utm_campaign');
        }
        return ($params)?$params:get_theme_setting('utm_campaign');
    }
}

if (! function_exists('getUtmSource')) {
    function getUtmSource($params = null){
        if(request()->has('utm_source')){
            return request()->get('utm_source');
        }
        return ($params)?$params:get_theme_setting('utm_source');
    }
}

if (! function_exists('getCommunicationMedium')) {
    function getCommunicationMedium($params = null){
        if(request()->has('lead_type')){
            return request()->get('lead_type');
        }
        return ($params)?$params:get_theme_setting('lead_type');
    }
}