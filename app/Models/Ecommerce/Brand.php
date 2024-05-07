<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    // Relación uno a muchos (una marca puede tener muchos productos)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
