<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserOffers;

class OffersController extends Controller
{
    public function Create(Request $request,$id)
    {
        UserOffers::create([
            'prix' => $request->prix,
            'duree' => $request->duree,
            'description' => $request->description,
            'user_id' => $request->session()->get('id'),
            'post_id' => $id,
            'created_at' => now(),
            'updated_at'=> now(),
        ]);

        return back()->with('success', 'Data saved successfully!');
    }
}
