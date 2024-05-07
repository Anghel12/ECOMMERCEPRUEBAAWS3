<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id',
        'content',
    ];

    // Relación polimórfica con otros modelos
    public function commentable()
    {
        return $this->morphTo();
    }

    // Relación muchos a uno con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
