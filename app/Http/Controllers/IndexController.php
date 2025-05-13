<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        try {
            $request->session()->get("userData");
            
            $contentMain = (object)['enable_otp'=>1];
            return view("index",compact("contentMain"));

        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }
}
