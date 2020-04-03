<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->year('year');
            $table->string('title');

            /**
             * Author relation
             */
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')
                ->references('id')->on('authors')
                ->onDelete('RESTRICT');

            /**
             * Genre relation
             */
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')
                ->references('id')->on('genres')
                ->onDelete('RESTRICT');

            /**
             * Publisher relation
             */
            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')
                ->references('id')->on('publishers')
                ->onDelete('RESTRICT');

            $table->softDeletes();
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
        Schema::dropIfExists('books');
    }
}
