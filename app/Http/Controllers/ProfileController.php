<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCreation;

class ProfileController extends Controller
{
    function index(Request $request) {
        $id = $request->session()->get('id');
        $UserData = UserCreation::select('*')->where('id',$id)->get();
        return view('connectedUsers.profile',['UserData' => $UserData]);
    }
}
