<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $response['abouts']=About::get();
        return view('site.about.index',$response);
    }
}
