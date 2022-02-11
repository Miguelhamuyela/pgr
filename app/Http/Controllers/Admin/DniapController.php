<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Dniap;
use Illuminate\Http\Request;

class DniapController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['dniap'] = Dniap::first();
           //Logger
           $this->Logger->log('info', 'Visualizou um Dniap com o identificador ');
        return view('admin.fightCorruption.dniap.details.index', $response);
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
        $response['dniap'] = Dniap::find($id);
         //Logger
         $this->Logger->log('info', 'Entrou em editar um Dniap com o identificador ' . $id);
        return view('admin.fightCorruption.dniap.edit.index', $response);
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

        Dniap::find($id)->update($request->all());

         //Logger
         $this->Logger->log('info', 'Editou um Dniap com o identificador ' . $id);
        return redirect()->route('admin.dniap.show')->with('edit', '1');
    }
}
