<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2,10000,1000),
            'description' => $this->faker->paragraph(),
            'url_image' => $this->faker->image(null,640,480,null,true),
            'state'=>1
        ];
    }
}
