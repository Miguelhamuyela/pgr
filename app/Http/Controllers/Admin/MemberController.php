<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $response['members'] = Member::orderBy('id', 'desc')->get();
        return view('admin.member.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create.index');
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
            'name' => 'required|min:2|max:255',
            'function' => 'max:255',
            'photo' => 'required|mimes:jpg,png,jpeg',
        ]);


        $file = $request->file('photo')->store('members');
        $member = Member::create([
            'photo' => $file,
            'name' => $request->name,
            'function' => $request->function
        ]);
        return redirect("admin/member/show/$member->id")->with('create', '1');
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
        $response['member'] = Member::find($id);
        return view('admin.member.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $response['member'] = Member::find($id);
        return view('admin.member.edit.index', $response);
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
            'name' => 'required|min:2|max:255',
            'function' => 'max:255',
            'photo' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('photo')) {
            $file = $file->store('members');
        } else {
            $file = Member::find($id)->photo;
        }

        Member::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'function' => $request->function
        ]);

        return redirect("admin/member/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Member::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
