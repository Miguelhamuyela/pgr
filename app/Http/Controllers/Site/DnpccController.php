<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Dnpcc;

class DnpccController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['dnpcc'] = Dnpcc::first();
        return view('site.pgr.dnpcc.index', $response);
    }
}
