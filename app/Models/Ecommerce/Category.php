<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'status'];

     
    // Define los valores válidos para el campo status
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';

    // Define los atributos casteados
    protected $casts = [
        'status' => 'string', // Se asegura de que el campo status sea siempre una cadena
    ];

    public function parentCategory()
    {
        return $this->hasOne(ParentCategory::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
   
}
