<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorBook>
 */
class AuthorBookFactory extends Factory
{
    private $bookIdCounter = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bookIds = Book::pluck('id')->toArray();
        $bookId = $bookIds[$this->bookIdCounter % count($bookIds)];
        $this->bookIdCounter++;

        return [
            'book_id' => $bookId,
            'author_id' => Author::all()->random(1)->pluck('id')[0]
        ];
    }
}
