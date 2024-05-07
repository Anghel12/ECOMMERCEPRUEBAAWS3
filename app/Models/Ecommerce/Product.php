<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'description',
        'price',
        'previous_price',
        'quantity',
        'status',
        'featured',
    ];

    // Relación muchos a uno (un producto pertenece a un usuario)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a uno (un producto pertenece a una categoría)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación uno a muchos (un producto puede tener varias imágenes)
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    // Relación muchos a muchos (un producto puede tener varios tags)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

     /**
     * Obtener las listas de deseos asociadas al producto.
     */
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
