<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnnualReport;
use Illuminate\Http\Request;

class AnnualReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['annualReports']=AnnualReport::get();
        return view('admin.AnnualReport.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AnnualReport.create.index');
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
        $file = $middle->storeAs('AnnualReports', 'PGR-publicacoes-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        $Annoucent=AnnualReport::create([
            'file' => $file,
            'title' => $request->title,

       ]);

        return redirect("admin/relatorios-Anuais/show/$Annoucent->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['annualReport'] = AnnualReport::find($id);
        return view('admin.AnnualReport.detalis.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['AnnualReport'] = AnnualReport::find($id);
        return view('admin.AnnualReport.edit.index', $response);
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
            $file = $middle->storeAs(' AnnualReports', 'PGR-publicacoes-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file =  AnnualReport::find($id)->file;
        }

        $AnnualReport =  AnnualReport::find($id)->update([
            'file' => $file,
            'title' => $request->title,
        ]);
        return redirect("admin/relatorios-Anuais/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AnnualReport::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
