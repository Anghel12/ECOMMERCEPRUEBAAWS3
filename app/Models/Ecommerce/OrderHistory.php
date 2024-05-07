<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;

    protected $table = 'order_history';

    protected $fillable = ['order_id', 'status'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
