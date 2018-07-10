<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // we call our seeder to activate it
        $this->call(BlogsTableSeeder::class);
    }
}
