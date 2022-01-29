<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.search.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $response['search'] = $request->search;
        $response['informations'] = News::where([['state', 'Autorizada'], ['title', 'like',  "%" . $request->search. "%"]])->get();
        return view('site.search.index', $response);
    }
}
