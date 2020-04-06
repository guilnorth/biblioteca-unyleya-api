<?php

use Illuminate\Database\Seeder;
use App\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsSeeder::class);
        $this->call(PublishersSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(BooksSeeder::class);
    }
}
