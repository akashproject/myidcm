<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class PageController extends Controller
{
    public function index($slug,Request $request)
    {
        try {
            $contentMain = Page::whereRaw("`slug` COLLATE utf8mb4_bin = ?", [$slug])->first();
            return view("page.".$contentMain->template,compact('contentMain'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

}
