<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    
    protected $fillable = ['name'];

    // Relación uno a muchos con los pedidos
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
