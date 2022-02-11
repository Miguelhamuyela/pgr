<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\AttorneyGeneral;
use Illuminate\Http\Request;

class AttorneyGeneralController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    public function edit($id)
    {
        $response['attorneyGeneral'] =AttorneyGeneral::find($id);
           //Logger
           $this->Logger->log('info', 'Entrou em editar o Procurador Geral com o identificador ' . $id);
    return view('admin.attorney_general.edit.index',$response);
    }

    public function update(Request $request, $id)
    {
if(isset($request->photo)){
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
 AttorneyGeneral::find($id)->update([
    'photo' => $file,
    'name' => $request->name,
    'description' => $request->description,
]);

}

else{

    $request->validate([
        'name' => 'required|min:5|max:255',
        'description' => 'required|min:5',

    ]);

    AttorneyGeneral::find($id)->update([
        'name' => $request->name,
        'description' => $request->description,
    ]);

}

  //Logger
  $this->Logger->log('info', 'Editou em editar o Procurador Geral com o identificador ' . $id);
return redirect("admin/procurador-geral/edit/$id")->with('edit', '1');
    }  //
}
