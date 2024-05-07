<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

       // Relación muchos a uno con usuario
       public function user()
       {
           return $this->belongsTo(User::class);
       }
   
       // Relación uno a muchos con imágenes
       public function images()
       {
           return $this->morphMany(Image::class, 'imageable');
       }
}
