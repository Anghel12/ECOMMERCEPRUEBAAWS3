<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingStatus extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location', 'tracking_code'];

    /**
     * Obtener todos los envíos asociados a este estado de envío.
     */
    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}
