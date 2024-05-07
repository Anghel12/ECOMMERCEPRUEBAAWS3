<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'calle' => $this->faker->text(20),
            'numero' => $this->faker->randomDigitNot(400),
            'distrito' =>   $this->faker->text(20), 
            'ciudad' =>  $this->faker->text(20), 
            'user_id' => User::all()->random()->id,
        ];
    }
}
