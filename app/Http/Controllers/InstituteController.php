<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Institute;
use App\Models\State;
use App\Models\City;
use App\Models\Course;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class InstituteController extends Controller
{
    //
    public function state($slug)
    {
        try {
            $contentMain = State::where('slug', $slug)->first();
            $institutes = Institute::where('state_id', $contentMain->id);
            $institutes->where('status', 1);
            if(isset($_COOKIE['lng']) && isset($_COOKIE['lat'])){
                $institutes->orderBy(DB::raw('POW((lng-'."22.707401".'),2) + POW((lat-'."88.387015".'),2)'));
            }
            $institutes = $institutes->get();
            //select * from `institutes` where `state_id` = 35 and `status` = '1'
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->id)->where('status', 1)->orderBy("name","asc")->get();
            return view('institutes.index',compact('institutes','states','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function city($slug)
    {
        try {
            
            $contentMain = City::where('slug', $slug)->first();
            $state = State::where('id',$contentMain->state_id)->first();
            $institutes = Institute::where('city_id', $contentMain->id)->where('status', 1)->get();
            $states = State::where('status', 1)->get();
            $cities = City::where('state_id', $contentMain->state_id)->where('status', 1)->orderBy("name","asc")->get();
            return view('institutes.city',compact('institutes','states','state','contentMain','cities'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function view($slug)
    {
        try {
            $contentMain = Institute::where('slug', $slug)->first();
            if ($contentMain === null) {
                return redirect('/institutes',301);
            }

            // $courseType = DB::table('course_type')
            // ->join('courses', 'course_type.id', '=', 'courses.type_id')
            // ->select('course_type.id as category_id','course_type.name as category','course_type.slug as slug')
            // ->whereIn('courses.id', json_decode($contentMain->courses))
            // ->distinct()
            // ->orderBy('course_type.id', 'asc')
            // ->get();

            $courses = DB::table('courses')
            ->where('courses.status',1)
            ->get();

            // $directoryPath = public_path('gallery/'.$contentMain->slug);
            // $fileNames = [];
            // if (File::isDirectory($directoryPath)) {
            //     $fileNames = File::files($directoryPath);
            // }
            // $galleryImg=[];

            // foreach ($fileNames as $file) {
            //     $galleryImg[] = $contentMain->slug.'/'.pathinfo($file, PATHINFO_FILENAME).'.'.pathinfo($file, PATHINFO_EXTENSION);
            // }

            $states = State::where('status', 1)->get();
            $institute = $contentMain->name;

            // $directoryPath = 'u';

            // $gallery = DB::table('gallery')->where("institute_id",$contentMain->id)->get();

            $state = State::select('name','region')->where('id',$contentMain->state_id)->first();
            return view('institutes.view',compact('contentMain','institute','courses','states','state'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e);
        }
       
    }

    public function getCitiesByStateId(Request $request){
        try {
            $data = $request->all();
            $cities = City::where('state_id', $data['state_id'])->orderBy('name', 'asc')->get();
            return response()->json($cities,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
        
        }
    }
}
