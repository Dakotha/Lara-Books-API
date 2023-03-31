<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BookResource::collection(Book::with(['authors', 'category'])->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $book = Book::create($request->validated());
        return new BookResource($book);
    }

    public function addAuthors($bookId, Request $request)
    {
        $book = Book::find($bookId);
        if (!$book) {
            return response()->json(['error' => 'Book not found'], 404);
        }

        $data = $request->json()->all();
        $authorIds = $data['author_ids'];

        $book->authors()->attach($authorIds);

        return response()->json(['success' => true], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // return new BookResource($book);
        return new BookResource(Book::with(['authors'])->find($book->id));
        // return BookResource::collection($book::with(['authors'])->get());
        // return Book::with(['authors'])->find($book->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}
