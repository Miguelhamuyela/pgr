<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DirectiveCategory;
use Illuminate\Http\Request;

class DirectiveCategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        DirectiveCategory::create($request->all());
        return redirect()->back()->with('create', '1');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DirectiveCategory::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
