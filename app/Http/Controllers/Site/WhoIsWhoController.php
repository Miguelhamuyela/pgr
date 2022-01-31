<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class WhoIsWhoController extends Controller
{
    public function index()
    {
        return view('site.whoIsWho.index');
    }
}
