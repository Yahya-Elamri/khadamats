<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCreation;
use App\Models\UserPosts;

class HomeController extends Controller
{
    function index(Request $request) {
        $UserData = $request->get('UserData');
        $allUsers =  UserPosts::orderBy('created_at', 'desc')->get();
        return view('connectedUsers.home',['UserData' => $UserData,'allUsers'=>$allUsers]);
    }

    function Search(Request $request) {
        $UserData = $request->get('UserData');
        $adresse = $request->input('adresse');
        $proffession = $request->input('proffession');
        $categorie = $request->input('categorie');
        if($categorie){
            $CategorieString = implode(',', $categorie);
        }

        if($request->search){
            $allUsers = UserPosts::where('adresse', 'like', "%$request->search%")
                ->orwhere('title', 'like', "%$request->search%")
                ->orwhere('proffession', 'like', "%$request->search%")
                ->orwhere('categorie', 'like', "%$request->search%")
                ->get();
        }elseif($adresse){
            $allUsers = UserPosts::where('adresse', 'like', "%$adresse%")
                ->get();
        }elseif($proffession){
            $allUsers = UserPosts::where('proffession', 'like', "%$proffession%")
                ->get();
        }elseif($categorie){
            $allUsers = UserPosts::where('categorie', 'like', "%$CategorieString%")
                ->get();
        }elseif($adresse && $proffession){
            $allUsers = UserPosts::where('adresse', 'like', "%$adresse%")
                ->where('proffession', 'like', "%$proffession%")
                ->get();
        }elseif($adresse && $categorie){
            $allUsers = UserPosts::where('adresse', 'like', "%$adresse%")
                ->where('categorie', 'like', "%$CategorieString%")
                ->get();
        }elseif($proffession && $categorie){
            $allUsers = UserPosts::where('proffession', 'like', "%$proffession%")
                ->where('categorie', 'like', "%$CategorieString%")
                ->get();
        }elseif($adresse && $proffession && $categorie){
            $allUsers = UserPosts::where('adresse', 'like', "%$adresse%")
                ->where('proffession', 'like', "%$proffession%")
                ->where('categorie', 'like', "%$CategorieString%")
                ->get();
        }else{
            return redirect("/home");
        }
        return view('connectedUsers.home',['UserData' => $UserData,'allUsers'=>$allUsers]);
    }
    function SearchUsers(Request $request){
        $UserData = $request->get('UserData');
        $Search = $request->query('search');
        $adresse = $request->input('adresse');
        $proffession = $request->input('proffession');
        $experience = $request->input('experience');
        $categorie = $request->input('categorie');
        if($categorie){
            $CategorieString = implode(',', $categorie);
        }
        if($Search){
            $allUsers = UserCreation::where('proffession', 'like', "%$request->search%")
                ->orwhere('categorie', 'like', "%$request->search%")
                ->orwhere('diplome', 'like', "%$request->search%")
                ->get();
        }elseif($categorie){
            $allUsers = UserCreation::where('categorie', 'like', "%$CategorieString%")
                ->get();
        }else return redirect('/home');
        return view('connectedUsers.professionnel',['UserData' => $UserData,'allUsers'=>$allUsers]);
    }
}
