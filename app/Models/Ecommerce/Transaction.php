<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'amount',
        'payment_method',
    ];

    // Relación muchos a uno con el pedido
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
