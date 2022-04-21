<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\Api\AuthorsController;

Route::get('/', [HomeController::class, 'index'])->name('main');
Route::get('/home', [MainController::class, 'index'])->name('user');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Book'], function () {
        Route::get('/book', [BookController::class, 'index'])->name('book.index');
        Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
        Route::post('/book', [BookController::class, 'store'])->name('book.store');
        Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');
        Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
        Route::patch('/book/{id}', [BookController::class, 'update'])->name('book.update');
        Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book.destroy');
    });

    Route::group(['namespace' => 'Author'], function () {
        Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
        Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
        Route::post('/author', [AuthorController::class, 'store'])->name('author.store');
        Route::get('/author/{id}', [AuthorController::class, 'show'])->name('author.show');
        Route::get('/author/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
        Route::patch('/author/{id}', [AuthorController::class, 'update'])->name('author.update');
        Route::delete('/author/{id}', [AuthorController::class, 'destroy'])->name('author.destroy');
    });

    Route::group(['namespace' => 'Genre'], function () {
        Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
        Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
        Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
        Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
        Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
        Route::patch('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
        Route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.destroy');
    });
});

Auth::routes();

Route::apiResources([
    'api/books' => BooksController::class,
    'api/authors' => AuthorsController::class,
]);
