<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compositon;
use Illuminate\Http\Request;

class CompositonController extends Controller
{
    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['compositon'] = Compositon::first();
        return view('admin.pgr.composition.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $response['compositon'] = Compositon::find($id);

        return view('admin.pgr.composition.edit.index',  $response);
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
        $request->validate([
            'title' => 'required|min:10|max:255',
            'information' => 'required|min:20',

        ]);
        Compositon::find($id)->update([
            'title' => $request->title,
            'information' => $request->information,

        ]);
        return redirect()->route('admin.composition.show')->with('edit', '1');
    }
}
