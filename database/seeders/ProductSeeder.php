<?php

namespace Database\Seeders;

use App\Models\Ecommerce\Image;
use App\Models\Ecommerce\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory(400)->create();

        foreach ($products as $product) {
            Image::factory(1)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);

         /*    Comment::factory(1)->create([
                'commentable_id' => $post->id,
                'commentable_type' => Product::class
            ]); */

         /*    $product->tags()->attach([
                rand(1, 4),
                rand(5, 8)
            ]); */

           /*  Price::factory(1)->create([
                'priceable_id' => $post->id,
                'priceable_type' => Post::class
            ]); */
            
        }
    }
}
