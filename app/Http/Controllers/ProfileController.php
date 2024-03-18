<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCreation;

class ProfileController extends Controller
{
    function index(Request $request,$username) {
        $id = $request->session()->get('id');
        $UserData = UserCreation::select('*')->where('id',$id)->where('username',$username)->get();
        if($UserData->isEmpty()){
            return abort(404);
        }
        return view('connectedUsers.profile',['UserData' => $UserData]);
    }

    function profileParameter(Request $request,$username){
        $id = $request->session()->get('id');
        $UserData = UserCreation::select('*')->where('id',$id)->where('username',$username)->get();
        return view('connectedUsers.profileParameter',['UserData' => $UserData]);
    }
    function getProfile(Request $request){
        $UserData = UserCreation::select('*')->where('username',$request->username)->get();
        return view('profile',['UserData' => $UserData]);
    }
}
