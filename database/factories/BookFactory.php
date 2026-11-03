<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
{
    return [
        'isbn' => fake()->unique()->isbn13(),
        'title' => fake()->sentence(3),
        'description' => fake()->paragraph(), // <-- Tambahkan baris ini
        'author_id' => \App\Models\Author::factory(),
        'publisher' => fake()->company(),
        'year' => fake()->numberBetween(1950, (int) date('Y')),
        'status' => fake()->randomElement(['available', 'borrowed']),
    ];
}
}