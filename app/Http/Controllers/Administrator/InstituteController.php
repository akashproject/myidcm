<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\State;
use App\Models\City;

class InstituteController extends Controller
{

    public $_statusOK = 200;
    public $_statusErr = 500;

    public function index()
    {
        try {
            $institutes = Institute::all();
            return view('administrator.institutes.index',compact('institutes'));

        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function add() {
        $states = State::all();
        return view('administrator.institutes.add',compact('states'));
    }

    public function show($id)
    {
        try {
            $institute = Institute::find($id);
            $institute->courses = json_decode($institute->courses);
            $states = State::all();
            $cities = City::where('state_id', $institute->state)->orderBy('name', 'asc')->get();
            return view('administrator.institutes.show',compact('institute','states','cities','courses'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);
            $data['courses'] = isset($data['courses'])?json_encode($data['courses']):null;
            if($data['center_id'] <= 0){
                $course = Institute::create($data);
            } else {
                $course = Institute::findOrFail($data['institute_id']);
                $course->update($data);
            }

            return redirect()->back()->with('message', 'Institute updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Institute::findOrFail($id);
        $course->delete();
        return redirect('/administrator/institutes');
    }

    public function getCitiesByStateId(Request $request){
        try {
            $data = $request->all();
            $cities = City::where('state_id', $data['state_id'])->orderBy('name', 'asc')->get();
            return response()->json($cities,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
