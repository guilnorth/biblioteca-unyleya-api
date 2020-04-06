<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create(
            array(
                'title' => 'Harry Potter e a Ordem da Fênix',
                'year' => 2003,
                'author_id' => 1,
                'genre_id' => 1,
                'publisher_id' => 1
            )
        );
        Book::create(
            array(
                'title' => 'Admirável Mundo Novo',
                'year' => 1932,
                'author_id' => 2,
                'genre_id' => 2,
                'publisher_id' => 2
            )
        );
        Book::create(
            array(
                'title' => 'Sapiens - Uma Breve História da Humanidade',
                'year' => 2014,
                'author_id' => 3,
                'genre_id' => 3,
                'publisher_id' => 3
            )
        );
    }
}
