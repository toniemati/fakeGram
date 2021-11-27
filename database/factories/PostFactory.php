<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 11),
            'caption' => $this->faker->colorName(),
            'image' => 'uploads/x74uDlHCjrdaTXIYQBSdVdcxAm8anE8OcPVhv2ya.png',
        ];
    }
}
