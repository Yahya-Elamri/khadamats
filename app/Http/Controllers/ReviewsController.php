<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReviews;

class ReviewsController extends Controller
{
    public function Create(Request $request){
        $request->validate([
            'description' => 'required',
            'rate' => 'required|integer|between:1,5',
        ]);
        if($request->receiving_user_id == $request->session()->get('id')){
            return abort(404);
        }
        $post_id = $request->post_id;
        if($request->post_id == NULL){
            $post_id = 2;
        }
        UserReviews::create([
            'rating' => $request->rate,
            'description' => $request->description,
            'giving_user_id' => $request->session()->get('id'),
            'receiving_user_id' => $request->receiving_user_id,
            'post_id' => $post_id,
            'created_at' => now(),
            'updated_at'=> now(),
        ]);
        return back();
    }
}
