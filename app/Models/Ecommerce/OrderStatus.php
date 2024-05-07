<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'description',
    ];

    // Relación uno a muchos con los pedidos
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
