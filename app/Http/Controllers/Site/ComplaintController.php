<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.complaints.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|',
            'phone'    => 'required',
            'complaintData'    => 'required',
            'actsCorruption'    => 'required',
            'datesPeriods'    => 'required',
            'identificationSuspects'    => 'required',
            'knowledgeFacts'    => 'required', ]);

        Complaint::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'attachment' => $request->documentsEvidenc,
            'documentsEvidenc' => $request->documentsEvidenc,
            'amountsInvolved' => $request->amountsInvolved,
            'knowledgeFacts' => $request->knowledgeFacts,
            'complaintData' => $request->complaintData,
            'actsCorruption' => $request->actsCorruption,
            'datesPeriods' => $request->datesPeriods,
            'identificationSuspects' => $request->identificationSuspects, ]);

        return redirect()->back()->with('complaint', '1');
    }


}
