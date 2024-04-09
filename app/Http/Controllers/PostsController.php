<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPosts;
use App\Models\UserOffers;

class PostsController extends Controller
{
    function newpost(Request $request){
        $UserData = $request->get('UserData');
        return view('connectedUsers.newPost',['UserData' => $UserData]);
    }

    public function Create(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'proffession' => 'required|string',
            'categorie' => ['required', 'array'],
            'categorie.*' => ['required', 'string', 'distinct', 'in:Services de Santé et de Soins,Services Informatique et Technologique,Services éducatif et de formation,Services de transport et de livraison,Services de maintenace et de reparation,Services domestiques / menage,Services de construction,Services financieres et comptables,Services juridiques et legau,Services artisanaux,Autres'],
            'adresse' => 'required|string',
        ]);
        
        $selectedCategorie = $request->input('categorie');
        $CategorieString = implode(',', $selectedCategorie);

        UserPosts::create([
            'title' => $request->title,
            'description' => $request->description,
            'proffession' => $request->proffession,
            'categorie' => $CategorieString,
            'adresse' => $request->adresse,
            'user_id' => $request->session()->get('id'),
            'created_at' => now(),
            'updated_at'=> now(),
        ]);
        return redirect('/home')->with('success', 'Post created successfully.');
    }

    public function getUpdatePostPage(Request $request,$username,$id){
        $UserData = $request->get('UserData');
        foreach($UserData as $data){
            if($data->username != $username){
                return abort(404);
            }
        }
        $Posts = UserPosts::with('userCreation')->where("id",$id)->get();
        return view('connectedUsers.updatePost',['UserData' => $UserData , 'Posts'=> $Posts]);
    }

    public function UpdatePost(Request $request,$username,$id){
        if($request->title){
            UserPosts::where('id',$id)->update(['nom' => $request->title]);
        }
        if($request->description){
            UserPosts::where('id',$id)->update(['description' => $request->description]);
        }
        if($request->adresse){
            UserPosts::where('id',$id)->update(['adresse' => $request->adresse]);
        }
        if($request->categorie){
            $selectedCategorie = $request->input('categorie');
            $CategorieString = implode(',', $selectedCategorie);
            UserPosts::where('id',$id)->update(['categorie' => $CategorieString]);
        }
        if($request->proffession){
            UserPosts::where('id',$id)->update(['proffession' => $request->proffession]);
        }
        return redirect("/post/$id");
    }

    public function getConnectedUserPosts(Request $request){
        $UserData = $request->get('UserData');
        $Posts = UserPosts::with('userCreation')->where("user_id",$request->session()->get('id'))->orderBy('created_at', 'desc')->get();
        return view('connectedUsers.gererPosts',['UserData' => $UserData , 'Posts'=> $Posts]);
    }

    public function getPosts(Request $request,$id){
        $UserData = $request->get('UserData');
        $Posts = UserPosts::with('userCreation')->where("id",$id)->get();
        $Offers = UserOffers::with('userCreation')->where("post_id",$id)->orderBy('created_at', 'desc')->get();
        return view('connectedUsers.posts',['UserData' => $UserData , 'Posts'=> $Posts , 'Offers'=> $Offers]);
    }

    public function DeletePost(Request $request,$username,$id){
        $Post = UserPosts::findOrFail($id);
        $Post->delete();
        return back();
    }
}
