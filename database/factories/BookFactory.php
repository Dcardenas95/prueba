<?php

namespace Database\Factories;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Faker;


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
            'year_publication' => Carbon::parse('2020-01-01')->addDays(random_int(0, 365)),
            'category' => fake()->randomElement(['Accion', 'Suspenso', 'Amor', 'Comedia'])
        ];
       
    }

}