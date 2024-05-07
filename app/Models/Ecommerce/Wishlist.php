<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    /**
     * Obtener el usuario dueño de la lista de deseos.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtener el producto asociado a la lista de deseos.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
