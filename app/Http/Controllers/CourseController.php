<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->layout = (check_device('mobile'))?"mobile.":'';
    }


    public function view($slug)
    {
        try {

            $contentMain = Course::where('slug', $slug)->first();
            
            //Related Courses
            $courses = DB::table('courses')->get();

            $utm_campaign = $contentMain->utm_campaign;
            $utm_source = $contentMain->utm_source;

            return view('courses.view',compact('contentMain','courses'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json($e->getMessage(), 200);
        }
    }

}
