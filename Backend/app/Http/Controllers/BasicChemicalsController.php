<?php

namespace App\Http\Controllers;

use App\Models\BasicChemicals;
use Illuminate\Http\Request;

class BasicChemicalsController extends Controller
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
        $basicChemicals = BasicChemicals::get();
        return view('basicchemicals.basicchemicals',compact('basicChemicals'));
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
        $basicChemicals = new BasicChemicals;
        $basicChemicals->chemical_name = $request->chemical_name;
        $basicChemicals->short_description = $request->short_description;
        $basicChemicals->description = $request->description;
        $basicChemicals->application = $request->application;
        $basicChemicals->status = "Active";

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/image/basicchemicals/',$image_name);
            $basicChemicals->chemical_image = $image_name;
        }
        $basicChemicals->save();
        return response()->json(['success'=>'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BasicChemicals  $basicChemicals
     * @return \Illuminate\Http\Response
     */
    public function show(BasicChemicals $basicChemicals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BasicChemicals  $basicChemicals
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicChemicals $basicChemicals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BasicChemicals  $basicChemicals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicChemicals $basicChemicals)
    {
        //
    }
    public function statuschange($id,$status){
        $basicChemicals = BasicChemicals::find($id);
        $basicChemicals->status = $status;
        $basicChemicals->update();
        return response()->json(['success'=>'Status changed successfully.']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BasicChemicals  $basicChemicals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $basicChemicals = BasicChemicals::find($id);
        if (!is_null($basicChemicals)) {
            if(!is_null($basicChemicals->chemical_image)){
                $image_path = public_path().'/assets/image/basicchemicals/'.$basicChemicals->chemical_image;
                unlink($image_path);
                $basicChemicals->delete();
                return response()->json(['success'=>'Data Delete successfully.']);
            }
            else{
                $basicChemicals->delete();
                return response()->json(['success'=>'Data Delete successfully.']);
            }
        }
    }
}
