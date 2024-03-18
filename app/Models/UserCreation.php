<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCreation extends Model
{
    use HasFactory;
    protected $table="user_creations";
    protected $fillable=[
        'id','nom','prenom','telephone','adresse','username',
        'email','password','description','profile_image',
        'categorie','proffession','diplome','experience',
        'availabilite','created_at','updated_at'
    ];
}
