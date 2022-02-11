<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\OtherDocuments;
use Illuminate\Http\Request;

class OtherDocumentsController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$response['otherDocument']=OtherDocuments::get();
          //Logger
          $this->Logger->log('info', 'Listou  Outros Documentos');
        return view('admin.otherDocuments.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Cadastrar Outros Documentos');
    return view('admin.otherDocuments.create.index');
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
        $file = $middle->storeAs('OtherDocumentss', 'PGR-publicacoes-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        $OtherDocuments=OtherDocuments::create([
            'file' => $file,
            'title' => $request->title,

       ]);
           //Logger
         $this->Logger->log('info', 'Cadastrou Outros Documentos com o Identificador' );
        return redirect("admin/outros-documentos/show/$OtherDocuments->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['OtherDocuments'] = OtherDocuments::find($id);
        $this->Logger->log('info', 'Visualizou Outros Documentos com o identificador ' . $id);
        return view('admin.otherDocuments.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['OtherDocuments'] = OtherDocuments::find($id);
         //Logger
         $this->Logger->log('info', 'Entrou em editar Outros Documentos com o identificador ' . $id);
        return view('admin.otherDocuments.edit.index', $response);
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
            $file = $middle->storeAs(' OtherDocuments', 'PGR-OutrosDocumentos-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file =  OtherDocuments::find($id)->file;
        }

        $OtherDocuments =  OtherDocuments::find($id)->update([
            'file' => $file,
            'title' => $request->title,
        ]);
          //Logger
          $this->Logger->log('info', 'Editou Outros Documentos com o identificador ' . $id);
        return redirect("admin/outros-documentos/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Logger
         $this->Logger->log('info', 'Eliminou Outros Documentos com o identificador ' . $id);
        OtherDocuments::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
