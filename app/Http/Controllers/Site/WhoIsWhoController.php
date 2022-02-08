<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Direction;

class WhoIsWhoController extends Controller
{
    public function index()
    {
        $response['directions_center']=Direction::where('organ','Direcção Central')->get();
        $response['directions_nacionaty']=Direction::where('organ','Órgãos Nacionais')->get();
        $response['directions_Regionals']=Direction::where('organ','Órgãos Regionais')->get();
        $response['directions_provincials']=Direction::where('organ','Orgãos Provinciais')->get();
        return view('site.whoIsWho.index',$response);
    }
}
