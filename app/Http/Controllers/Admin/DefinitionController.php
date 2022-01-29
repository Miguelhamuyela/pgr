<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Defini;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['definitions'] = Defini::first();
        return view('admin.pgr.definition.details.index', $response);
    }
    
    public function edit($id)
    {
        $response['definitions'] = Defini::find($id);
        return view('admin.pgr.definition.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|min:10|max:255',
            'definicon' => 'required|min:20|',

        ]);
        $definition = Defini::find($id)->update([
            'title' => $request->title,
            'definicon' => $request->definicon,

        ]);
        return redirect()->back()->with('edit', '1');
    }
}
