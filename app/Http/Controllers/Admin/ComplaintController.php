<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Response['complaints']=Complaint::get();
    return view('admin.complaint.list.index',$Response);
    }

    public function show($id)
    {
        $response['complaint'] = Complaint::find($id);
        return view('admin.complaint.details.index', $response);
    }



}
