<?php

namespace App\Http\Controllers;

use App\Models\AuxiliaryChemicals;
use Illuminate\Http\Request;

class AuxiliaryChemicalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auxiliaryChemicals = AuxiliaryChemicals::get();
        return view('AuxiliaryChemicals.AuxiliaryChemicals', compact('auxiliaryChemicals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for($i=0;$i<count($request->chemical_name);$i++){
            $auxiliaryChemicals = new AuxiliaryChemicals;
            $auxiliaryChemicals->chemical_name = $request->chemical_name[$i];
            $auxiliaryChemicals->status = "Active";
            $auxiliaryChemicals->save();
        }

        return response()->json(['success' => 'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuxiliaryChemicals  $auxiliaryChemicals
     * @return \Illuminate\Http\Response
     */
    public function show(AuxiliaryChemicals $auxiliaryChemicals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuxiliaryChemicals  $auxiliaryChemicals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auxiliaryChemicals = AuxiliaryChemicals::find($id);
        return response()->json($auxiliaryChemicals);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuxiliaryChemicals  $auxiliaryChemicals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $auxiliaryChemicals = AuxiliaryChemicals::find($request->id);
        $auxiliaryChemicals->chemical_name = $request->chemical_name1;
        $auxiliaryChemicals->update();
        return response()->json($auxiliaryChemicals);
    }

    public function statuschange($id, $status)
    {
        $auxiliaryChemicals = AuxiliaryChemicals::find($id);
        $auxiliaryChemicals->status = $status;
        $auxiliaryChemicals->update();
        return response()->json(['success' => 'Status changed successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuxiliaryChemicals  $auxiliaryChemicals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auxiliaryChemicals = AuxiliaryChemicals::find($id);
        $auxiliaryChemicals->delete();
        return response()->json(['success' => 'Data Delete successfully.']);

    }
}
