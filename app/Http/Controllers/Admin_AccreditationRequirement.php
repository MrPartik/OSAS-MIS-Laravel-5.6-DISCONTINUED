<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accreditation_Requirement;
use DB;
class Admin_AccreditationRequirement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
//        $list = DB::table('r_org_accreditation_details')->get();
        $list = Accreditation_Requirement::all();
        return view('Admin.AccreditationRequirement', ['list' => $list]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.AccreditationRequirement.blade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, ['txtname' => 'required','txtdesc' => 'required' ]);
        
        $post = new Accreditation_Requirement;
        
        $getcode = DB::table('r_org_accreditation_details')->select(DB::raw("CONCAT('REQ',RIGHT(100000+count(OrgAccrDetail_ID)+1,5)) AS CODE"))->get();
        foreach ($getcode as $code) {
            $post -> OrgAccrDetail_CODE = $code->CODE;

        }
        $post -> OrgAccrDetail_NAME = $request->input('txtname');
        $post -> OrgAccrDetail_DESC = $request->input('txtdesc');
        $post -> save();
        return redirect('/Admin/AccreditationRequirement')->with('success','Record Submitted');
        
//        print_r($request->input('txtreqdesc'));
//        print_r($request->input('txtreqname'));
//        return $getcode;
//        $data = $request->all();
//        AccreditationRequirement::create($data);
//        $session
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
    }
}
