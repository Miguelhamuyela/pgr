<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
       /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['presidents'] = President::first();
        return view('admin.cne.president.details.index', $response);
    }

    public function edit($id)
    {
        $response['presidents'] = President::find($id);
        return view('admin.cne.president.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|min:5|max:255',
            'information' => 'required|min:20',
            'file' =>  'mimes:jpg,png,jpeg',

        ]);

        if($file = $request->file('file')){
            $file = $file->store('presidents');
        }else{
            $file = President::find($id)->file;
        }

        President::find($id)->update([
            'title' => $request->title,
            'information' => $request->information,
            'file' => $file

        ]);
        return redirect()->back()->with('edit', '1');
    }
}
