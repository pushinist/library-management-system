<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => random_int(1, 50),
            'reader_id' => random_int(1, 50),
            'when_given' => $this->faker->date(),
            'return_before' => $this->faker->date(),
            'when_returned' => $this->faker->date(),
            'status' => $this->faker->randomElement(['given', 'returned', 'overstayed']),
        ];
    }
}
