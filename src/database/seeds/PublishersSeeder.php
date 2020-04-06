<?php

use Illuminate\Database\Seeder;
use App\Publisher;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create(
            array(
                'name' => 'Rocco',
            )
        );
        Publisher::create(
            array(
                'name' => 'Biblioteca Azul',
            )
        );
        Publisher::create(
            array(
                'name' => 'L&PM',
            )
        );
    }
}
