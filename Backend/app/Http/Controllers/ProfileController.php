<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $profile = Profile::get();
       return view('profile.profile',compact('profile'));
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
        $profile = new Profile;
        $profile->phoneno = $request->phoneno;
        $profile->mobileno1 = $request->mobileno1;
        $profile->mobileno2 = $request->mobileno2;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->address_link = $request->address_link;
        $profile->history = $request->history;
        $profile->mission = $request->mission;
        $profile->vision = $request->vision;
        $profile->value = $request->value;

        $profile->save();
        return response()->json(['success'=>'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.update',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $profile->phoneno = $request->phoneno;
        $profile->mobileno1 = $request->mobileno1;
        $profile->mobileno2 = $request->mobileno2;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->address_link = $request->address_link;
        $profile->history = $request->history;
        $profile->mission = $request->mission;
        $profile->vision = $request->vision;
        $profile->value = $request->value;
        $profile->update();
        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
