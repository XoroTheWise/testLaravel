<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_genres', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bookId');
            $table->unsignedBigInteger('genreId');

            $table->index('bookId', 'book_genre_book_idx');
            $table->index('genreId', 'book_genre_genre_idx');

            $table->foreign('bookId', 'book_genre_book_fk')->on('books')->references('id');
            $table->foreign('genreId', 'book_genre_genre_fk')->on('genres')->references('id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_genres');
    }
}
