<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Api\bookApiController;
use App\Http\Controllers\Api\authorApiController;

Route::get('/', [HomeController::class, 'index'])->name('main');
Route::get('/home', [MainController::class, 'index'])->name('user');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/admin', [BookController::class, 'index'])->name('books.index');
    Route::group(['namespace' => 'Book'], function () {
        Route::get('/books', [BookController::class, 'index'])->name('books.index');
        Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
        Route::post('/books', [BookController::class, 'store'])->name('books.store');
        Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
        Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
        Route::patch('/books/{book}', [BookController::class, 'update'])->name('books.update');
        Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
    });

    Route::group(['namespace' => 'Author'], function () {
        Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
        Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
        Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
        Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
        Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
        Route::patch('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
        Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');
    });

    Route::group(['namespace' => 'Genre'], function () {
        Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
        Route::get('/genres/create', [GenreController::class, 'create'])->name('genres.create');
        Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');
        Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genres.show');
        Route::get('/genres/{genre}/edit', [GenreController::class, 'edit'])->name('genres.edit');
        Route::patch('/genres/{genre}', [GenreController::class, 'update'])->name('genres.update');
        Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genres.destroy');
    });
});

Auth::routes();

Route::apiResources([
    'booksApi' => bookApiController::class,
    'authorsApi' => authorApiController::class,
]);
