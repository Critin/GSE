<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Students::class, 50)->create();
        factory(\App\Grades::class, 20)->create();
        factory(\App\Studies::class, 100)->create();
    }
}
