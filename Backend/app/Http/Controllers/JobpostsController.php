<?php

namespace App\Http\Controllers;

use App\Models\Jobposts;
use Illuminate\Http\Request;

class JobpostsController extends Controller
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
        $jobposts = Jobposts::orderByDesc('id')->get();
        return view("job.job", compact('jobposts'));
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
        $jobposts = new Jobposts;
        $jobposts->position_name = $request->position_name;
        $jobposts->vacancy = $request->vacancy;
        $jobposts->salary = $request->salary;
        $jobposts->exprience = $request->exprience;
        $jobposts->application_dead_line = $request->application_dead_line;
        $jobposts->description = $request->description;
        $jobposts->status = "Active";

        $jobposts->save();
        return response()->json(['success' => 'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobposts  $jobposts
     * @return \Illuminate\Http\Response
     */
    public function show(Jobposts $jobposts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobposts  $jobposts
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobposts $jobposts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobposts  $jobposts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobposts $jobposts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobposts  $jobposts
     * @return \Illuminate\Http\Response
     */

    public function statuschange($id, $status)
    {
        $jobposts = Jobposts::find($id);
        $jobposts->status = $status;
        $jobposts->update();
        return response()->json(['success' => 'Status changed successfully.']);
    }
    public function destroy($id)
    {
        $jobposts = Jobposts::find($id);
        $jobposts->delete();
        return response()->json(['success' => 'Data Delete successfully.']);
    }
}
