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
        if ($request->username) {
            $id = $request->session()->get('id');
            $UserData = UserCreation::select('*')->where('id',$id)->get();
            $User = UserCreation::select('*')->where('username',$request->username)->get();
    
            foreach($User as $data){
                if($data->id == $id){
                    return redirect('/'.$data->username);
                }
            }
            
            return view('connectedUsers.profiles',['UserData' => $UserData,'User' => $User]);
        }else{
            return redirect('/home');
        }
    }
}
