<?php

namespace Database\Factories;

use App\Models\Book;
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
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'isbn' => fake()->randomNumber(8), // Utiliza ISBN-10 ficticios generados aleatoriamente
            'year_publication' => fake()->year(),
            'category' => fake()->word(),
        ];
       
    }

}