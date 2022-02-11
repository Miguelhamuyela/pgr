<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Dnpcc;
use Illuminate\Http\Request;

class DnpccController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['dnpcc'] = Dnpcc::first();
          //Logger
          $this->Logger->log('info', 'Visualizou um Dnpcc com o identificador ');
        return view('admin.fightCorruption.dnpcc.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $response['dnpcc'] = Dnpcc::find($id);
        $this->Logger->log('info', 'Entrou em editar um Dnpcc com o identificador ' . $id);
        return view('admin.fightCorruption.dnpcc.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'initials' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Dnpcc::find($id)->update($request->all());
         //Logger
        $this->Logger->log('info', 'Editou um Dnpcc com o identificador ' . $id);
        return redirect()->route('admin.dnpcc.show')->with('edit', '1');
    }
}
