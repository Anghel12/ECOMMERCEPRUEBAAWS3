<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relación muchos a muchos (un tag puede estar asociado a varios productos)
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
