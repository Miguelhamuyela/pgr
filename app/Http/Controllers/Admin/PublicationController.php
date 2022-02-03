<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['Publications']= Publication::get();
        return view('admin.publication.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.publication.create.index');
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
            'file' => 'required|mimes:jpg,png,jpeg,pdf,docx,doc',
        ]);

        $middle = $request->file('file');
        $file = $middle->storeAs('publications', 'PGR-publicacoes-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        $Annoucent=Publication::create([
            'file' => $file,
            'title' => $request->title,

       ]);

        return redirect("admin/publicacoes/show/$Annoucent->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['Publication'] = Publication::find($id);
        return view('admin.publication.detalis.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['Publication'] = Publication::find($id);
        return view('admin.publication.edit.index', $response);
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
            'title' => 'required|min:5|max:255',
            'file' => 'required|mimes:jpg,png,jpeg,pdf,docx,doc',
        ]);

        if ($middle = $request->file('file')) {
            $file = $middle->storeAs(' publications', 'PGR-publicacoes-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file =  Publication::find($id)->file;
        }

        $Publication =  Publication::find($id)->update([
            'file' => $file,
            'title' => $request->title,
        ]);
        return redirect("admin/publicacoes/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publication::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
