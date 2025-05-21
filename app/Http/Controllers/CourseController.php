<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\File;

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
            $directoryPath = public_path('tools/');
            $fileNames = [];
            if (File::isDirectory($directoryPath)) {
                $fileNames = File::files($directoryPath);
            }
            $tools = [];
            foreach ($fileNames as $file) {
                $tools[] = pathinfo($file, PATHINFO_FILENAME).'.'.pathinfo($file, PATHINFO_EXTENSION);
            }
            return view('courses.view',compact('contentMain','courses','tools'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json($e->getMessage(), 200);
        }
    }

}
