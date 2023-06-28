<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Author::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Book::factory(30)->create();
        \App\Models\AuthorBook::factory(Book::all()->count())->create();
    }
}
