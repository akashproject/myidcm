<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function primaryMenu()
    {
        $primaryMenu = App::make('primaryMenu');
        return response()->json($primaryMenu, $this->_statusOK);
    }

    public function footerMenu()
    {
        $footerMenu = App::make('footerMenu');
        return response()->json($footerMenu, $this->_statusOK);
    }

    public function courses()
    {
        $courses = App::make('courses');
        return response()->json($courses, $this->_statusOK);
    }

    public function institutes()
    {
        $institutes = App::make('institutes');
        return response()->json($institutes, $this->_statusOK);
    }

    public function setting($key)
    {
        $setting = get_theme_setting($key);
        return response()->json($setting, $this->_statusOK);
    }

}
