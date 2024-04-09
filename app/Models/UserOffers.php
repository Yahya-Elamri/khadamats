<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserCreation;

class UserOffers extends Model
{
    use HasFactory;
    protected $table="user_offers";
    protected $fillable=[
        'id',
        'prix',
        'duree',
        'description',
        'user_id',
        'post_id',
        'created_at',
        'updated_at',
    ];
    public function userCreation()
    {
        return $this->belongsTo(UserCreation::class, 'user_id');
    }
    public function userPosts()
    {
        return $this->belongsTo(UserPosts::class, 'post_id');
    }
}
