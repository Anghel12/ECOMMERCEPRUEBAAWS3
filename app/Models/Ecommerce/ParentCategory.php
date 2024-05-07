<?php

namespace App\Models\ECommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'status', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
