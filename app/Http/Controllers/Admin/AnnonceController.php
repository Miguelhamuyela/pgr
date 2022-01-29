<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    public function list()
    {
        //
        $response['Annonce'] = Annonce::get();
        return view('admin.annonce.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.annonce.create.index');
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
            'subtitle' => 'required|min:5|max:255',
            'typewriter' => 'required|min:2|max:255',
            'body' => 'required||min:10',
            'date' => 'required|date',
            'image' =>  'required|mimes:jpg,png,jpeg',

        ]);
        $file = $request->file('image')->store('annonces');

        $Annonce = Annonce::create([
            'path' => $file,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'typewriter' => $request->typewriter,
            'body' => $request->body,
            'date' => $request->date,
            'state' => 'Autorizada'
        ]);


        return redirect("admin/annonce/show/$Annonce->id")->with('create', '1');
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
        $response['Annonce'] = Annonce::find($id);
        return view('admin.annonce.details.index', $response);
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
        $response['Annonce'] = Annonce::find($id);
        return view('admin.annonce.edit.index', $response);
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
            'subtitle' => 'required|min:5|max:255',
            'typewriter' => 'required|min:2|max:255',
            'body' => 'required|min:5',
            'date' => 'required|date',
            'image' =>  'mimes:jpg,png,jpeg',
        ]);

        if($file = $request->file('image')){
            $file = $file->store('annonces');
        }else{
            $file = Annonce::find($id)->path;
        }
        Annonce::find($id)->update([
            'path' => $file,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'typewriter' => $request->typewriter,
            'body' => $request->body,
            'state' => $request->state,
            'date' => $request->date,
            'state' => 'Autorizada'
        ]);


        return redirect("admin/annonce/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Annonce::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
