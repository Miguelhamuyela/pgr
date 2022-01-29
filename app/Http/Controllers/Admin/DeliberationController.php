<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deliberation;
use Illuminate\Http\Request;

class DeliberationController extends Controller
{

    public function index()
    {
        $response['deliberations'] = Deliberation::get();
        return view('admin.pgr.deliberation.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pgr.deliberation.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' =>  'mimes:jpg,png,pdf,docx,pptx',
            'title' => 'required|min:5|max:255',

        ]);
        $file = $request->file('file')->store('files');
        $deliberation = Deliberation::create([
            'file' => $file,
            'title' => $request->title,


        ]);
        return redirect("admin/deliberation/show/$deliberation->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['deliberation'] = Deliberation::find($id);

        return view('admin.pgr.deliberation.detalis.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['deliberation'] = Deliberation::find($id);
        return view('admin.pgr.deliberation.edit.index', $response);
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
            'file' =>  'required|mimes:jpg,png,pdf,docx,pptx',
            'title' => 'required|min:5|max:255',

        ]);
        $file = $request->file('file')->store('files');
        Deliberation::find($id)->update([
            'file' => $file,
            'title' => $request->title,
        ]);
        return redirect("admin/deliberation/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deliberation::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
