<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Author::create(
            array(
                'name' => 'J. K. Rowling',
                'year_birth' => 1965,
                'gender' => 'F',
                'nationality' => 'Britânica'
            )
        );
        Author::create(
            array(
                'name' => 'Aldous Huxley',
                'year_birth' => 1976,
                'gender' => 'M',
                'nationality' => 'Inglês'
            )
        );
        Author::create(
            array(
                'name' => 'Yuval Harari',
                'year_birth' => 1901,
                'gender' => 'M',
                'nationality' => 'Israelense'
            )
        );
    }
}
