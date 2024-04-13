<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCreation;
use App\Models\UserReviews;

class ProfileController extends Controller
{
    function index(Request $request,$username) {
        $UserData = $request->get('UserData');
        if($UserData->isEmpty()){
            return abort(404);
        }
        return view('connectedUsers.profile',['UserData' => $UserData]);
    }

    function profileParameter(Request $request,$username){
        $UserData = $request->get('UserData');
        return view('connectedUsers.components.informationpersonnelle',['UserData' => $UserData]);
    }

    function Parameter(Request $request,$username,$url){
        $UserData = $request->get('UserData');
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
            $UserData = $request->get('UserData');
            $User = UserCreation::select('*')->where('username',$username)->get();
    
            foreach($User as $data){
                if($data->id == $id){
                    return redirect('/'.$data->username);
                }
            }

            $Reviews = UserReviews::with('userCreation')->where('receiving_user_id',$data->id)->get();
            $ReviewSum = UserReviews::where('receiving_user_id', $data->id)->sum('rating');
            $ReviewCount = UserReviews::where('receiving_user_id', $data->id)->count();
            $Counts = UserReviews::select('rating', \DB::raw('COUNT(*) as count'))->where('receiving_user_id', $data->id)
              ->groupBy('rating')->orderBy('rating' , 'desc')
              ->get();
              
            return view('profile',['UserData' => $UserData,'User' => $User, 'Reviews'=>$Reviews,'ReviewSum'=>$ReviewSum,'ReviewCount'=>$ReviewCount,'Counts'=>$Counts]);
        }else{
            return redirect('/home');
        }
    }
}
