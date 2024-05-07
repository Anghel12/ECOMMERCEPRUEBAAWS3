<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        // Agregar otros campos según sea necesario
    ];

    // Relación muchos a uno con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
