<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
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
        $Response['complaints']=Complaint::get();
            //Logger
            $this->Logger->log('info', 'Listou uma Denúcia ');
    return view('admin.complaint.list.index',$Response);
    }


    public function show($id)
    {
        $response['complaint'] = Complaint::find($id);
          //Logger
          $this->Logger->log('info', 'Visualizou uma Denúcia  com o identificador ' . $id);
        return view('admin.complaint.details.index', $response);
    }



}
