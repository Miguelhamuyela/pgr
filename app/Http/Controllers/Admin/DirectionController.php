<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['directions']=Direction::get();
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
        return view('admin.Direction.details.index', $response);
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
        return view('admin.Direction.edit.index', $response);
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
        return redirect()->back()->with('destroy', '1');
    }
}
