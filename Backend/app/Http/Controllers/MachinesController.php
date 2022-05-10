<?php

namespace App\Http\Controllers;

use App\Models\Machines;
use Illuminate\Http\Request;

class MachinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines = Machines::get();
       return view("Machines.Machines" , compact('machines'));
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
        $machines = new Machines;
        $machines->machine_name = $request->machine_name;
        $machines->description = $request->description;
        $machines->application = $request->application;
        $machines->status = "Active";

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/image/machines/', $image_name);
            $machines->machine_image = $image_name;
        }
        $machines->save();
        return response()->json(['success' => 'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Machines  $machines
     * @return \Illuminate\Http\Response
     */
    public function show(Machines $machines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Machines  $machines
     * @return \Illuminate\Http\Response
     */
    public function edit(Machines $machines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Machines  $machines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Machines $machines)
    {
        //
    }

    public function statuschange($id, $status)
    {
        $machines = Machines::find($id);
        $machines->status = $status;
        $machines->update();
        return response()->json(['success' => 'Status changed successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Machines  $machines
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $machines = Machines::find($id);
        if (!is_null($machines)) {
            if (!is_null($machines->machine_image)) {
                $image_path = public_path() . '/assets/image/machines/' . $machines->machine_image;
                unlink($image_path);
                $machines->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            } else {
                $machines->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            }
        }
    }
}
