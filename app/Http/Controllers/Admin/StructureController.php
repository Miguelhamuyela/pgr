<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['structure'] = Structure::first();
        return view('admin.pgr.structure.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['structure'] = Structure::find($id);

        return view('admin.pgr.structure.edit.index', $response);
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
        $request->validate(['file' =>  'required|mimes:jpg,png,pdf,docx,pptx', ]);

        $file = $request->file('file')->store('structures');
        Structure::find($id)->update([
            'file' => $file,
        ]);
        return redirect()->back()->with('edit', '1');
    }

}
