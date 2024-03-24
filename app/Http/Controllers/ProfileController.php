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
        return view('connectedUsers.components.informationpersonnelle',['UserData' => $UserData]);
    }

    function Parameter(Request $request,$username,$url){
        $id = $request->session()->get('id');
        $UserData = UserCreation::select('*')->where('id',$id)->where('username',$username)->get();
        if($url == 'informationpersonnelle'){
            return view('connectedUsers.components.informationpersonnelle',['UserData' => $UserData]);
        }
        if($url == 'informationsprofessionnels'){
            return view('connectedUsers.components.informationsprofessionnels',['UserData' => $UserData]);
        }
        if($url == 'securite'){
            return view('connectedUsers.components.securite',['UserData' => $UserData]);
        }
        if($url == 'plus'){
            return view('connectedUsers.components.plus',['UserData' => $UserData]);
        }
        return abort(404);
    }

    function getProfile(Request $request,$username){
        if ($username) {
            $id = $request->session()->get('id');
            $UserData = UserCreation::select('*')->where('id',$id)->get();
            $User = UserCreation::select('*')->where('username',$username)->get();
    
            foreach($User as $data){
                if($data->id == $id){
                    return redirect('/'.$data->username);
                }
            }
            
            return view('profile',['UserData' => $UserData,'User' => $User]);
        }else{
            return redirect('/home');
        }
    }
}
