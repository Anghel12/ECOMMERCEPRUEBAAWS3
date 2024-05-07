<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'billing_address_id',
        'transaction_id',
        'status_id',
    ];

    // Relación muchos a uno con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a uno con la dirección de envío
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    // Relación muchos a uno con la dirección de facturación
    public function billingAddress()
    {
        return $this->belongsTo(Address::class, 'billing_address_id');
    }

    // Relación muchos a uno con la transacción
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    // Relación muchos a uno con el estado del pedido
    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    // Relación uno a muchos con los elementos del pedido
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
