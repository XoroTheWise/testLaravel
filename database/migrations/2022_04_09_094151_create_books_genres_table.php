<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatebookgenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_genre', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('genre_id');

            $table->index('book_id', 'book_genre_book_idx');
            $table->index('genre_id', 'book_genre_genre_idx');

            $table->foreign('book_id', 'book_genre_book_fk')->on('book')->references('id')->onDelete('cascade');;
            $table->foreign('genre_id', 'book_genre_genre_fk')->on('genre')->references('id')->onDelete('cascade');;

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
        Schema::dropIfExists('book_genre');
    }
}