<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttorneyGeneral;
use Illuminate\Http\Request;

class AttorneyGeneralController extends Controller
{

    public function edit($id)
    {
        $response['attorneyGeneral'] =AttorneyGeneral::find($id);
    return view('admin.attorney_general.edit.index',$response);
    }

    public function update(Request $request, $id)
    {


   $request->validate([
    'name' => 'required|min:5|max:255',
    'photo' => 'required|mimes:jpg,png,jpeg,pdf,docx,doc',
    'description' => 'required|min:5',

]);

if ($middle = $request->file('photo')) {
    $file = $middle->storeAs('AttorneyGeneral', 'PGR-procurador-Geral' . uniqid(rand(1, 5)) . "." . $middle->extension());
} else {
    $file = AttorneyGeneral::find($id)->file;
}

$About = AttorneyGeneral::find($id)->update([
    'photo' => $file,
    'name' => $request->name,
    'description' => $request->description,
]);
return redirect("admin/procurador-geral/edit/$id")->with('edit', '1');
    }  //
}
