<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'billing_email',
        'billing_phone',
    ];

    // Relación muchos a uno con el pedido
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
