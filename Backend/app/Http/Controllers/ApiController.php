<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BasicChemicals;
use App\Models\Message;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function bannerindex(){
        $banner = Banner::where('status','Active')->get();
        return response()->json($banner);
    }
    public function basicchemicals(){
        $basicchemicals = BasicChemicals::where('status','Active')->get();
        return response()->json($basicchemicals);
    }

    public function messagestore(Request $request){
        $message = new Message;
        $message->f_name = $request->f_name;
        $message->l_name = $request->l_name;
        $message->name_of_organization = $request->name_of_organization;
        $message->position = $request->position;
        $message->phone_number = $request->phone_number;
        $message->email = $request->email;
        $message->description = $request->description;
        $message->save();
        return response()->json([
            'status' => 200,
            'message' => 'Message Successfully',
        ]);

    }
}
