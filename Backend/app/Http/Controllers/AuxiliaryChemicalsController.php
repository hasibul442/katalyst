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
        $auxiliaryChemicals = new AuxiliaryChemicals;
        $auxiliaryChemicals->chemical_name = $request->chemical_name;
        $auxiliaryChemicals->description = $request->description;
        $auxiliaryChemicals->application = $request->application;
        $auxiliaryChemicals->status = "Active";

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/image/auxiliarychemicals/', $image_name);
            $auxiliaryChemicals->chemical_image = $image_name;
        }
        $auxiliaryChemicals->save();
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
    public function edit(AuxiliaryChemicals $auxiliaryChemicals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuxiliaryChemicals  $auxiliaryChemicals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuxiliaryChemicals $auxiliaryChemicals)
    {
        //
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
        if (!is_null($auxiliaryChemicals)) {
            if (!is_null($auxiliaryChemicals->chemical_image)) {
                $image_path = public_path() . '/assets/image/auxiliarychemicals/' . $auxiliaryChemicals->chemical_image;
                unlink($image_path);
                $auxiliaryChemicals->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            } else {
                $auxiliaryChemicals->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            }
        }
    }
}
