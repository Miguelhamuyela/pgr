<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
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
        $response['directions']=Direction::get();
          //Logger
          $this->Logger->log('info', 'Listou a Direção Central');
        return view('admin.direction.list.index',$response);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.direction.create.index');
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
            'organ' => 'required|min:5|max:255',
            'office' => 'required|min:5|max:255',
            'name' => 'required|min:5|max:255',
            'photo' => 'required|mimes:jpg,png,jpeg',
        ]);


        $middle = $request->file('photo');
        $file = $middle->storeAs('Direction', 'PGR-Direção-' . uniqid(rand(1, 5)) . "." . $middle->extension());

               $Direction = Direction::create([
            'photo' => $file,
            'organ' => $request->organ,
            'office' => $request->office,
            'province' => $request->province,
            'name'=> $request->name,
        ]);

            //Logger
            $this->Logger->log('info', 'Cadastrou uma  Direção Central  com o identificador ');
        return redirect("admin/direcao/show/$Direction->id")->with('create', '1');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['direction'] = Direction::find($id);
          //Logger
          $this->Logger->log('info', 'Visualizou uma  Direção Central com o identificador ' . $id);
        return view('admin.direction.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['direction'] = Direction::find($id);
          //Logger
          $this->Logger->log('info', 'Entrou em editar uma  Direção Central com o identificador ' . $id);
        return view('admin.direction.edit.index', $response);
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
            'organ' => 'required|min:5|max:255',
            'office' => 'required|min:5|max:255',
            'name' => 'required|min:5|max:255',

        ]);


if(isset($request->photo)){
    $middle = $request->file('photo');
    $file = $middle->storeAs('Direction', 'PGR-Direção-' . uniqid(rand(1, 5)) . "." . $middle->extension());
  Direction::find($id)->update([
        'photo' => $file,
        'organ' => $request->organ,
        'office' => $request->office,
        'province' => $request->province,
        'name'=> $request->name,
    ]);

}

else{
   Direction::find($id)->update([

        'organ' => $request->organ,
        'office' => $request->office,
        'province' => $request->province,
        'name'=> $request->name,
    ]);

}

         //Logger
         $this->Logger->log('info', 'Editou uma Direção Central com o identificador ' . $id);
        return redirect("admin/direcao/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Direction::find($id)->delete();
          //Logger
          $this->Logger->log('info', 'Eliminou uma Direção Central com o identificador ' . $id);
        return redirect()->back()->with('destroy', '1');
    }
    
}
