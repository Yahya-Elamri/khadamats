<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserCreation;

class UserPosts extends Model
{
    use HasFactory;
    protected $table="users_posts";
    protected $fillable=[
        'id',
        'title',
        'description',
        'categorie',
        'proffession',
        'adresse',
        'user_id',
        'created_at',
        'updated_at',
    ];
    public function userCreation()
    {
        return $this->belongsTo(UserCreation::class, 'user_id');
    }
}
