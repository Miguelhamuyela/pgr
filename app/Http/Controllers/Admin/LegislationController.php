<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Legislation;
use Illuminate\Http\Request;

class LegislationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $response['legislations'] = Legislation::get();
        return view('admin.legislation.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.legislation.create.index');
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
            'title' => 'required|min:5|max:255',
            'legislation' => 'required|min:5|max:255',
            'file' => 'required|mimes:jpg,png,jpeg,pdf,docx,doc',
        ]);


        $middle = $request->file('file');
        $file = $middle->storeAs('legislations', 'PGR-Legislação-' . uniqid(rand(1, 5)) . "." . $middle->extension());

        $legislation = Legislation::create([
            'file' => $file,
            'title' => $request->title,
            'legislation' => $request->legislation
        ]);
        return redirect("admin/legislação/show/$legislation->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['legislation'] = Legislation::find($id);
        return view('admin.legislation.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['legislation'] = Legislation::find($id);
        return view('admin.legislation.edit.index', $response);
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
            'title' => 'required|min:5|max:255',
            'legislation' => 'required|min:5|max:255',
            'file' => 'mimes:jpg,png,jpeg,pdf,docx,doc',
        ]);

        if ($middle = $request->file('file')) {
            $file = $middle->storeAs('legislations', 'PGR-Legislação-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file = Legislation::find($id)->file;
        }
        
        $legislation = Legislation::find($id)->update([
            'file' => $file,
            'title' => $request->title,
            'legislation' => $request->legislation
        ]);
        return redirect("admin/legislação/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Legislation::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
