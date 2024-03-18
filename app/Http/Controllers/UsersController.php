<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCreation;

class UsersController extends Controller
{
    function Auth(Request $request){
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $id = UserCreation::select('id')
                                    ->where(function($query)use ($request){$query->where('username', $request->username)->orWhere('email', $request->username);})
                                    ->where('password',$request->password)->get();
        if($id->isEmpty()){
            return 'not found';
        }
        if($request->conditions == 'on'){
            foreach ($id as $object) {
                $id = $object->id ;
            }
            $request->session()->put('id', $id);
        }
        UserCreation::where(function($query)use ($request){$query->where('username', $request->username)->orWhere('email', $request->username);})->update(['availabilite' => 1]);
        return redirect("/home");
    }

    function Create(Request $request){
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        UserCreation::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => now(),
            'updated_at'=> now(),
        ]);
        return redirect("/login")->with(200, 'Post created successfully!');
    }

    function UserDisconnect(Request $request) {
        UserCreation::where('id',$request->session()->get('id'))->update(['availabilite' => 0]);
        $request->session()->flush();
        return redirect("/")->with(200, 'Post created successfully!');
    }
}
