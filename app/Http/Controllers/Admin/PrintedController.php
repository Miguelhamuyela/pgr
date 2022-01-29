<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Printed;
use Illuminate\Http\Request;

class PrintedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $response['Printeds'] = Printed::orderBy('id', 'desc')->get();
        return view('admin.printed.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.printed.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validation = $request->validate([
            'name' => 'required|min:5|max:255',
            'image' => 'required|mimes:pdf,jpeg,png,jpg',
        ]);


        $file = $request->file('image')->store('printed');

        $Printed = Printed::create([
            'cover' => $file,
            'name' => $request->name
        ]);

        return redirect("admin/printed/show/$Printed->id")->with('create', '1');
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
        $response['printed'] = Printed::find($id);
        return view('admin.printed.details.index', $response);
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
        $response['printed'] = Printed::find($id);
        return view('admin.printed.edit.index', $response);
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
            'name' => 'required|min:5|max:255',
            'image' => 'mimes:pdf,jpeg,png,jpg',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('printeds');
        } else {
            $file = Printed::find($id)->cover;
        }

        Printed::find($id)->update([
            'cover' => $file,
            'name' => $request->name
        ]);

        return redirect("admin/printed/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Printed::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
