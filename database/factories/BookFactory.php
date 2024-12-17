<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'publication_year' => $this->faker->year(),
            'genre' => $this->faker->word(),
            'ISBN' => $this->faker->unique()->isbn13(),
            'amount' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->paragraph(),
        ];
    }
}
