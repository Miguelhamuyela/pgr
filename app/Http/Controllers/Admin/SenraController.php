<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Senra;
use Illuminate\Http\Request;

class SenraController extends Controller
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
        $response['senra'] = Senra::first();
         //Logger
         $this->Logger->log('info', 'Visualizou uma senra com o Identificador');
        return view('admin.fightCorruption.senra.details.index', $response);
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
        $response['senra'] = Senra::find($id);
         //Logger
         $this->Logger->log('info', 'Entrou em editar uma senra com o identificador' . $id);
        return view('admin.fightCorruption.senra.edit.index', $response);
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

        Senra::find($id)->update($request->all());

        //Logger
         $this->Logger->log('info', 'Editou uma sanra com o identificador ' . $id);
        return redirect()->route('admin.senra.show')->with('edit', '1');
    }
}
