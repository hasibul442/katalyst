<?php

namespace App\Http\Controllers;

use App\Models\Dyestuffs;
use Illuminate\Http\Request;

class DyestuffsController extends Controller
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
        $dyestuffs = Dyestuffs::get();
        return view('Dyestuffs.Dyestuffs', compact('dyestuffs'));
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
        $dyestuffs = new Dyestuffs;
        $dyestuffs->dyestuff_name = $request->dyestuff_name;
        $dyestuffs->description = $request->description;
        $dyestuffs->application = $request->application;
        $dyestuffs->status = "Active";

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/image/dyestuffs/', $image_name);
            $dyestuffs->dyestuff_image = $image_name;
        }
        $dyestuffs->save();
        return response()->json(['success' => 'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dyestuffs  $dyestuffs
     * @return \Illuminate\Http\Response
     */
    public function show(Dyestuffs $dyestuffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dyestuffs  $dyestuffs
     * @return \Illuminate\Http\Response
     */
    public function edit(Dyestuffs $dyestuffs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dyestuffs  $dyestuffs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dyestuffs $dyestuffs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dyestuffs  $dyestuffs
     * @return \Illuminate\Http\Response
     */

    public function statuschange($id, $status)
    {
        $dyestuffs = Dyestuffs::find($id);
        $dyestuffs->status = $status;
        $dyestuffs->update();
        return response()->json(['success' => 'Status changed successfully.']);
    }
    public function destroy($id)
    {
        $dyestuffs = Dyestuffs::find($id);
        if (!is_null($dyestuffs)) {
            if (!is_null($dyestuffs->dyestuff_image)) {
                $image_path = public_path() . '/assets/image/dyestuffs/' . $dyestuffs->dyestuff_image;
                unlink($image_path);
                $dyestuffs->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            } else {
                $dyestuffs->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            }
        }
    }
}
