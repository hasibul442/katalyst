<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::get();
        return view('Partners.Partners', compact('partners'));
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
        $partners = new Partners;
        $partners->company_name = $request->company_name;
        $partners->description = $request->description;

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/image/partners/', $image_name);
            $partners->logo = $image_name;
        }
        $partners->save();
        return response()->json(['success' => 'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(Partners $partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partners $partners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partners = Partners::find($id);
        if (!is_null($partners)) {
            if (!is_null($partners->logo)) {
                $image_path = public_path() . '/assets/image/partners/' . $partners->logo;
                unlink($image_path);
                $partners->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            } else {
                $partners->delete();
                return response()->json(['success' => 'Data Delete successfully.']);
            }
        }
    }
}
