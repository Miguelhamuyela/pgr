<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $response['audios'] = Audio::get();
        return view('admin.audio.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.audio.create.index');
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|min:|max:255',
            'dateAudio' => 'required|date',
            'description' => 'required|max:255',
            'audio' =>  'required|mimes:mp3,wav',
        ]);

     
        $middle = $request->file('audio');
        $file = $middle->storeAs('audios', 'CNE-Audio-' . uniqid(rand(1, 5)).".".$middle->extension());
     

        $audio = Audio::create([
            'audio' => $file,
            'title' => $request->title,
            'dateAudio' => $request->dateAudio,
            'description' => $request->description
        ]);
        return redirect("admin/audio/show/$audio->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['audio'] = Audio::find($id);
        return view('admin.audio.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['audio'] = Audio::find($id);
        return view('admin.audio.edit.index', $response);
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
        //
        $validation = $request->validate([
            'title' => 'required|min:|max:255',
            'dateAudio' => 'required|date',
            'description' => 'required|max:255',
            'audio' =>  'mimes:mp3,wav',
        ]);

        if ($middle = $request->file('audio')) {
            $file = $middle->storeAs('audios', 'CNE-Audio-' . uniqid(rand(1, 5)).".".$middle->extension());
         
        } else {
            $file = Audio::find($id)->audio;
        }

        $audio = Audio::find($id)->update([
            'audio' => $file,
            'title' => $request->title,
            'dateAudio' => $request->dateAudio,
            'description' => $request->description
        ]);
        return redirect("admin/audio/show/$id")->with('edit', '1');
    }

    /**
     * Remove the s
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Audio::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
