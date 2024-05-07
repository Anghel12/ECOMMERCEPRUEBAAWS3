<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url','user_id', 'imageable', 'is_primary' ];

    // Relación polimórfica con otros modelos
    public function imageable()
    {
        return $this->morphTo();
    }

    // Relación muchos a uno con usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
