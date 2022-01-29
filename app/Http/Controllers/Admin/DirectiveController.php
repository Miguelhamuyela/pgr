<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Directive;
use App\Models\DirectiveCategory;
use Illuminate\Http\Request;


class DirectiveController extends Controller
{
    public function index()
    {
        $response['categories'] = DirectiveCategory::orderBy('title', 'asc')->get();
        $response['directives'] = Directive::with('category')->get();
        return view('admin.cne.directive.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['categories'] = DirectiveCategory::orderBy('title', 'asc')->get();
        return view('admin.cne.directive.create.index', $response);
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
            'title' => 'required|min:5|max:255',
            'file' =>  'mimes:jpg,png,pdf,docx,pptx',
            'fk_idCategory' => 'required'
        ]);


        $middle = $request->file('file');
        $file = $middle->storeAs('directives', 'CNE-Directiva-' . uniqid(rand(1, 5)).".".$middle->extension());
     

        $directive = Directive::create([
            'file' => $file,
            'title' => $request->title,
            'fk_idCategory' => $request->fk_idCategory
        ]);

        return redirect("admin/directive/show/$directive->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['directive'] = Directive::with('category')->find($id);
        return view('admin.cne.directive.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['categories'] = DirectiveCategory::orderBy('title', 'asc')->get();
        $response['directive'] = Directive::with('category')->find($id);
        return view('admin.cne.directive.edit.index', $response);
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
            'file' =>  'mimes:jpg,png,pdf,docx,pptx',
            'fk_idCategory' => 'required'
        ]);

        if ($middle = $request->file('file')) {
            $file = $middle->storeAs('directives', 'CNE-Directiva-' . uniqid(rand(1, 5)).".".$middle->extension());
         
        } else {
            $file = Directive::find($id)->file;
        }

        Directive::find($id)->update([
            'file' => $file,
            'title' => $request->title,
            'fk_idCategory' => $request->fk_idCategory
        ]);

        return redirect("admin/directive/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Directive::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
