<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mandate;
use Illuminate\Http\Request;

class MandateController extends Controller
{

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['mandates'] = Mandate::first();
        return view('admin.pgr.mandate.details.index', $response);
    }

    public function edit($id)
    {
        $response['mandates'] = Mandate::find($id);
        return view('admin.pgr.mandate.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|min:10|max:255',
            'information' => 'required|min:20|',

        ]);
        Mandate::find($id)->update($request->all());
        return redirect()->back()->with('edit', '1');
    }
}
