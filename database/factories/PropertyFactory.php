<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title,
            'specifications'=>$this->faker->paragraph(2),
            'description'=>$this->faker->paragraph(5),
            // 'featured_image'=>$this->faker->image(url('/public/admin/assets/img')),
            'service_id'=>$this->faker->numberBetween(1, 10)
        ];
    }
}
