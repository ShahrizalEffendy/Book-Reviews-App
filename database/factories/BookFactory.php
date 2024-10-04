<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(3),
            'author'=>fake()->name(),
            'created_at'=>fake()->dateTimeBetween('-2 years'),
            'updated_at'=>fake()->dateTimeBetween('created_at','now')

        ];
    }
}
