<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'shipping_status_id', 'tracking_number'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function shippingStatus()
    {
        return $this->belongsTo(ShippingStatus::class);
    }
}
