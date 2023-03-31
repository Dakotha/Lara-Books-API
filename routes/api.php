<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);
Route::post('books/{id}/authors', [BookController::class, 'addAuthors'])->name('books.authors.store');
Route::apiResource('authors', AuthorController::class);
Route::apiResource('categories', CategoryController::class);
