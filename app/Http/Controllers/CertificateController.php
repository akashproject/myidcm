<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Student;

class CertificateController extends Controller
{
    public function show($code){
        try {
            $id = utf8_decode($code);
            $user = Student::findOrFail($id);
            $user->name;
            $user->date_of_birth = get_student_meta($user->id,'dob');
            $user->parent_name = get_student_meta($user->id,'parent_name');
            $user->center = get_student_meta($user->id,'center');
            $user->course = get_student_meta($user->id,'course');
            $user->center_code = get_student_meta($user->id,'center_code');
            $user->duration = get_student_meta($user->id,'duration');
            $user->grade = get_student_meta($user->id,'grade');
            QrCode::merge('/assets/frontend/images/fab.png')
            ->size(256)
            ->margin(1)
            ->generate(route('certificate',$user->id), public_path('images/qrcode_'.$user->id.'.svg'));
            $user->qrcode = url("public/images/qrcode_").$user->id.'.svg';

            return view('certificate.show',compact('user'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
}
