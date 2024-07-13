<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'caption'=>$this->faker->paragraph(2),
            'description'=>$this->faker->paragraph(6),
            // 'featured_image'=>$this->faker->image(url('/public/admin/assets/img')),
            'start_date'=>$this->faker->date('d-m-Y'),
            'service_id'=>$this->faker->numberBetween(1, 10)
        ];
    }
}
