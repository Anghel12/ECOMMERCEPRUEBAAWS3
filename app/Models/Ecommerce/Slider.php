<?php

namespace App\Models\ECommerce;

use App\Models\Ecommerce\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

     //relacion uno a muchos inversa
     public function user(){
        return $this->belongsTo(User::class);
    } 

     //Relacion uno a muchos polimorfica
    public function images(){

        return $this->morphone(Image::class, 'imageable');
    
     }
}
