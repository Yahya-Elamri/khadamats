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
        if ($request->conditions == 'on') {
            foreach ($id as $object) {
                $id = $object->id ;
            }
            $request->session()->put('id', $id);
            $minutes = 400;
            $request->session()->put('conditions', true);
            session()->put('_token', session()->token(), $minutes);
        } else {
            foreach ($id as $object) {
                $id = $object->id ;
            }
            $request->session()->put('id', $id);
            $request->session()->forget('conditions');
        }
        UserCreation::where(function($query)use ($request){$query->where('username', $request->username)->orWhere('email', $request->username);})->update(['availabilite' => 1]);
        return redirect("/home");
    }

    function updateUser(Request $request){
        if($request->nom){
            UserCreation::where('id',$request->session()->get('id'))->update(['nom' => $request->nom]);
        }
        if($request->prenom){
            UserCreation::where('id',$request->session()->get('id'))->update(['prenom' => $request->prenom]);
        }
        if($request->telephone){
            UserCreation::where('id',$request->session()->get('id'))->update(['telephone' => $request->telephone]);
        }
        if($request->adresse){
            UserCreation::where('id',$request->session()->get('id'))->update(['adresse' => $request->adresse]);
        }
        if($request->disponibilite){
            UserCreation::where('id',$request->session()->get('id'))->update(['disponibilite' => $request->disponibilite]);
        }
        if($request->email){
            UserCreation::where('id',$request->session()->get('id'))->update(['email' => $request->email]);
        }
        if($request->description){
            UserCreation::where('id',$request->session()->get('id'))->update(['description' => $request->description]);
        }
        if($request->categorie){
            $selectedCategorie = $request->input('categorie');
            $CategorieString = implode(',', $selectedCategorie);
            UserCreation::where('id',$request->session()->get('id'))->update(['categorie' => $CategorieString]);
        }
        if($request->proffession){
            UserCreation::where('id',$request->session()->get('id'))->update(['proffession' => $request->proffession]);
        }
        if($request->diplome){
            UserCreation::where('id',$request->session()->get('id'))->update(['diplome' => $request->diplome]);
        }
        if($request->experience){
            UserCreation::where('id',$request->session()->get('id'))->update(['experience' => $request->experience]);
        }
        if($request->image){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('profileimages'), $imageName);
            UserCreation::where('id',$request->session()->get('id'))->update(['profile_image' => $imageName]);
        }
        if ($request->file('cv')) {
            $cvName = time() * 2 .'.'.$request->file('cv')->extension();  
            $request->file('cv')->move(public_path('cvs'), $cvName);
            UserCreation::where('id',$request->session()->get('id'))->update(['cv' => $cvName]);
        }
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
