<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookReader;
use App\Models\Reader;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Book::factory()->count(50)->create();
        Reader::factory(50)->create();
        Transaction::factory(50)->create();
    }
}
