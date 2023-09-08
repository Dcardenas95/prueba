<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $books = Book::factory(10)->create();
        $users = User::factory(10)->create();

        $book_ids = $books->pluck('id'); // obtiene una colección de los ids de los libros
        $user_ids = $users->pluck('id'); // obtiene una colección de los ids de los usuarios

        Loan::create([
            'start_date' => Carbon::parse('2023-09-07 22:08:54'), 
            'expiration_date' => Carbon::parse('2023-09-07 22:08:54')->addDays(7),
            'book_id' => $book_ids->random(), 
            'user_id' => $user_ids->random(),
        ]);

        Loan::create([
            'start_date' => Carbon::parse('2023-08-20 22:08:54'), 
            'expiration_date' => Carbon::parse('2023-08-20 22:08:54')->addDays(7),
            'book_id' => $book_ids->random(), 
            'user_id' => $user_ids->random(),
        ]);

        Loan::create([
            'start_date' => Carbon::parse('2023-08-01 22:08:54'), 
            'expiration_date' => Carbon::parse('2023-08-01 22:08:54')->addDays(7),
            'book_id' => $book_ids->random(), 
            'user_id' => $user_ids->random(),
        ]);

        Loan::create([
            'start_date' => Carbon::parse('2023-12-09 22:08:54'), 
            'expiration_date' => Carbon::parse('2023-12-09 22:08:54')->addDays(7),
            'book_id' => $book_ids->random(), 
            'user_id' => $user_ids->random(),
        ]);
       
       
    }
}
