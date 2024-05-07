<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'vistas' => $this->faker->randomDigitNot(0),
            'extract' => $this->faker->text(20),
            'body' => $this->faker->text(500),
            'status' => $this->faker->randomElement([1, 2]),
            'category_id' => Category::all()->random()->id,
            'brand_id' => Brand::all()->random()->id, 
            'user_id' => User::all()->random()->id,
            'price_reciente' => $this->faker->randomDigitNot(400),

        ];
    }
}
