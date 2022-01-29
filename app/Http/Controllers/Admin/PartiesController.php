<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Parties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartiesController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['parties'] = Parties::get();
        return view('admin.parties.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.parties.create.index');
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

            'parties' => 'required|min:2|max:255',
            'image' =>  'required|mimes:jpg,png, jpeg',
            'date' => 'required|date',
            'body' => 'required',

        ]);
        $file = $request->file('image')->store('parties');
        $Parties = Parties::create([
            'image' => $file,
            'parties' => $request->parties,
            'date' => $request->date,
            'body' => $request->body,
            'state' => 'Autorizada'
        ]);


        return redirect("admin/parties/show/$Parties->id")->with('create', '1');
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
        $response['parties'] = Parties::find($id);
        return view('admin.parties.details.index', $response);
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
        $response['parties'] = Parties::find($id);
        return view('admin.parties.edit.index', $response);
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
            'parties' => 'required|min:2|max:255',
            'image' =>  'mimes:jpg,png,jpeg',
            'date' => 'required|date',
            'body' => 'required',
        ]);

        if($file = $request->file('image')){
            $file = $file->store('parties');
        }else{
            $file = Parties::find($id)->image;
        }

        Parties::find($id)->update([
            'image' => $file,
            'parties' => $request->parties,
            'date' => $request->date,
            'body' => $request->body,
            'state' => 'Autorizada'
        ]);



        return redirect("admin/parties/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Parties::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
