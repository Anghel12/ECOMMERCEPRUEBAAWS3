<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'reason', 'status'];

    // Relación uno a uno con el pedido
    public function order()
    {
        return $this->belongsTo(Order::class);
    }


}
