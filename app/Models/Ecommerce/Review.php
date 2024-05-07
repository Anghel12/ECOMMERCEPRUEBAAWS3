<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rating',
        'comment',
    ];

    // Relación polimórfica con otros modelos
    public function reviewable()
    {
        return $this->morphTo();
    }

    // Relación muchos a uno con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
