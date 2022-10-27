<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TasksTableSeeder::class);
       $this->call(LinksTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
