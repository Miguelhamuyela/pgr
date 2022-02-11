<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\SlideShow;
use Illuminate\Http\Request;

class SlideShowController extends Controller
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
    public function list()
    {
        //
        $response['slideshows'] = SlideShow::get();
          //Logger
          $this->Logger->log('info', 'Listou uma Imagem do Slideshow ');
        return view('admin.slideshow.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          //Logger
          $this->Logger->log('info', 'Cadastrou uma Imagem do Slideshow ');
        return view('admin.slideshow.create.index');
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
            'title' => 'max:255',
            'button' => 'max:50',
            'link' => 'max:255',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('image')->store('slideshows');
        $slide = SlideShow::create([
            'path' => $file,
            'title' => $request->title,
            'button' => $request->button,
            'link' => $request->link
        ]);
           //Logger
           $this->Logger->log('info', 'Cadastrou uma Imagem do Slideshow com o Identificador' );
        return redirect("admin/slideshow/show/$slide->id")->with('create', '1');
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
        $response['slideshow'] = SlideShow::find($id);
         //Logger
         $this->Logger->log('info', 'Visualizou uma Imagem do Slideshow com o identificador ' . $id);
        return view('admin.slideshow.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['slideshow'] = SlideShow::find($id);
          //Logger
          $this->Logger->log('info', 'Entrou em editar uma Imagem do Slideshow com o identificador' . $id);
        return view('admin.slideshow.edit.index', $response);
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
            'title' => 'max:255',
            'button' => 'max:50',
            'link' => 'max:255',
            'image' => 'mimes:jpg,png,jpeg'
        ]);

        if($file = $request->file('image')){
            $file = $file->store('slideshows');
        }else{
            $file = SlideShow::find($id)->path;
        }

        SlideShow::find($id)->update([
            'path' => $file,
            'title' => $request->title,
            'button' => $request->button,
            'link' => $request->link
        ]);
            //Logger
             $this->Logger->log('info', 'Editou uma Imagem do Slideshow com o identificador ' . $id);
        return redirect("admin/slideshow/show/$id")->with('edit', '1');
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
         $this->Logger->log('info', 'Eliminouuma Imagem do Slideshow com o identificador ' . $id);
        SlideShow::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
