<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
    ];

    // Relación muchos a uno (una subcategoría pertenece a una categoría)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación uno a muchos (una subcategoría puede tener muchos productos)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
