<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AbouteController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    public function edit($id)
    {
        $response['about'] = About::find($id);
          //Logger
          $this->Logger->log('info', 'Entrou em editar Notícia com o identificador' . $id);
    return view('admin.about.edit.index',$response);
    }

    public function update(Request $request, $id)
    {


   $request->validate([
    'title' => 'required|min:5|max:255',
    'photo' => 'required|mimes:jpg,png,jpeg,pdf,docx,doc',
    'aboute' => 'required|min:5|max:255',

]);

if ($middle = $request->file('photo')) {
    $file = $middle->storeAs('about', 'PGR-acerca-' . uniqid(rand(1, 5)) . "." . $middle->extension());
} else {
    $file =  About::find($id)->file;
}

$About =  About::find($id)->update([
    'photo' => $file,
    'title' => $request->title,
    'aboute' => $request->aboute,
]);

      //Logger
      $this->Logger->log('info', 'Editou  Notícia  com o identificador ' . $id);
return redirect("admin/about/edit/$id")->with('edit', '1');
    }

}
