<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Senra;

class SenraController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['senra'] = Senra::first();
        return view('site.fightCorruption.senra.index', $response);
    }
}
