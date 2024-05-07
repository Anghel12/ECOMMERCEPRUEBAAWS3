<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Relación muchos a uno con el pedido
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relación muchos a uno con el producto
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
