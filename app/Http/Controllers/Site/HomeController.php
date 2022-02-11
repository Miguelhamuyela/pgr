<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AttorneyGeneral;
use App\Models\Direction;
use App\Models\Gallery;
use App\Models\News;
use App\Models\SlideShow;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['directions_center']=Direction::where('organ','Direcção Central')->limit(3)->get();
        $response['attorney_general']=AttorneyGeneral::get();
        $response['slideshows'] = SlideShow::orderBy('id', 'desc')->get();
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('date', 'desc')->limit(6)->get();
        $response['galleries'] = Gallery::orderBy('id', 'desc')->limit(6)->get();
        return view('site.home.index', $response);
    }
}
