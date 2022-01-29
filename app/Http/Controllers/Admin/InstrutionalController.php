<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructional;
use Illuminate\Http\Request;

class InstrutionalController extends Controller
{

    public function index()
    {
        $response['instructionals'] = Instructional::get();
        return view('admin.pgr.instructional.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pgr.instructional.create.index');
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
            'file' =>  'required|mimes:jpg,png,pdf,docx,pptx',
            'title' => 'required|min:5|max:255',

        ]);

        $middle = $request->file('file');
        $file = $middle->storeAs('Instructionals', 'PGR-Instrutivo-' . uniqid(rand(1, 5)).".".$middle->extension());
     

        $Instructional = Instructional::create([
            'file' => $file,
            'title' => $request->title
        ]);
        return redirect("admin/instructional/show/$Instructional->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['institucion'] = Instructional::find($id);

        return view('admin.pgr.instructional.detalis.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['institucion'] = Instructional::find($id);
        return view('admin.pgr.instructional.edit.index', $response);
        //
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
            'file' =>  'mimes:jpg,png,pdf,docx,pptx'

        ]);

      
        if ($middle = $request->file('file')) {
            $file = $middle->storeAs('Instructionals', 'PGR-Instrutivo-' . uniqid(rand(1, 5)).".".$middle->extension());
         
        } else {
            $file = Instructional::find($id)->file;
        }
        Instructional::find($id)->update([
            'file' => $file,
            'title' => $request->title
        ]);


        return redirect("admin/instructional/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Instructional::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
