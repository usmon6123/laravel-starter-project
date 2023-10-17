<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => rand(1,User::all()->count()),
            'subject' => $this->faker->sentence,
            'message' => $this->faker->sentence,
            'file_url' => $this->faker->url
        ];


    }
}
