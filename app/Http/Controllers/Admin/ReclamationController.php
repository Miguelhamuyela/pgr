<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Reclamation;

class ReclamationController extends Controller
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
        //
        $response['reclamations'] = Reclamation::get();
         //Logger
         $this->Logger->log('info', 'Listou uma  Reclamação');
        return view('admin.reclamation.list.index', $response);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['reclamation'] = Reclamation::find($id);
         //Logger
         $this->Logger->log('info', 'Visualizou uma Reclamação com o Identificador');
        return view('admin.reclamation.details.index', $response);
    }
}
