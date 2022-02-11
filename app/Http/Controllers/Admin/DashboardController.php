<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Video;
use App\Models\User;

class DashboardController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /* Counts */
        $response['count_news'] = News::count();
        $response['count_gallery'] = Gallery::count();
        $response['count_user'] = User::count();
 
         //Logger
         $this->Logger->log('info', 'Entrou no Painel Administrativo');
        return view('admin.home.index', $response);
    }
}
