<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\OtherDocuments;
use Illuminate\Http\Request;

class OtherDocumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['otherDocument']=OtherDocuments::get();
    return view('site.otherDocume.index',$response);
    }


}
