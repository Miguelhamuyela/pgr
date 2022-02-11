<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Announcest;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
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
        $response['Announcests']= Announcest::get();

          //Logger
          $this->Logger->log('info', 'Listou um Comunicado');

        return view('admin.announcement.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //Logger
         $this->Logger->log('info', 'Listou um Comunicado');
     return view('admin.announcement.create.index');
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
        $file = $middle->storeAs('announcements', 'PGR-comunicados-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        $Annoucent=Announcest::create([
            'file' => $file,
            'title' => $request->title,

       ]);

         //Logger
         $this->Logger->log('info', 'Cadastrou um Comunicado  com o identificador ');
        return redirect("admin/comunicados/show/$Annoucent->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['Annoucent'] = Announcest::find($id);
         //Logger
         $this->Logger->log('info', 'Visualizou um Comunicado com o identificador ' . $id);
        return view('admin.announcement.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['Annoucent'] = Announcest::find($id);
          //Logger
          $this->Logger->log('info', 'Entrou em editar um Comunicado  com o identificador ' . $id);
        return view('admin.announcement.edit.index', $response);
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
            $file = $middle->storeAs(' announcements', 'PGR-comunicados-' . uniqid(rand(1, 5)) . "." . $middle->extension());
        } else {
            $file =  Announcest::find($id)->file;
        }

        $Announcest =  Announcest::find($id)->update([
            'file' => $file,
            'title' => $request->title,
        ]);

         //Logger
         $this->Logger->log('info', 'Editou um Comunicado  com o identificador ' . $id);

        return redirect("admin/comunicados/show/$id")->with('edit', '1');
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
          $this->Logger->log('info', 'Eliminou um Comunicado  com o identificador ' . $id);

        Announcest::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
