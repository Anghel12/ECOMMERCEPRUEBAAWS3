<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rating',
    ];

    // Relación polimórfica con otros modelos
    public function rateable()
    {
        return $this->morphTo();
    }

    // Relación muchos a uno con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
