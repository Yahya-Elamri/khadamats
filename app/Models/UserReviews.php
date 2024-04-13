<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserCreation;

class UserReviews extends Model
{
    use HasFactory;
    protected $table="reviews";
    protected $fillable=[
        'id',
        'rating',
        'description',
        'giving_user_id',
        'receiving_user_id',
        'post_id',
        'created_at',
        'updated_at',
    ];
    public function userCreation()
    {
        return $this->belongsTo(UserCreation::class, 'giving_user_id');
    }
}
