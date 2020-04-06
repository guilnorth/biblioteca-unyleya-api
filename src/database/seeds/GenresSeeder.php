<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(
            array(
                'name' => 'Literatura Fantástica',
            )
        );
        Genre::create(
            array(
                'name' => 'Ficção Distópica',
            )
        );
        Genre::create(
            array(
                'name' => 'História',
            )
        );
    }
}
