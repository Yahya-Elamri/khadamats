<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCreation;

class HomeController extends Controller
{
    function index(Request $request) {
        $id = $request->session()->get('id');
        $UserData = UserCreation::select('*')->where('id',$id)->get();
        $allUsers = UserCreation::all();
        return view('connectedUsers.home',['UserData' => $UserData,'allUsers'=>$allUsers]);
    }
}
