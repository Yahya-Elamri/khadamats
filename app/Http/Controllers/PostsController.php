<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPosts;

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
            'categorie' => ['required', 'array', 'size:3'],
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
}
