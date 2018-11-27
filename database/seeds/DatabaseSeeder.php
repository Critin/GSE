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
        factory(\App\User::class)->create(['email' => 'admin@admin.com']);
        factory(\App\Companies::class, 10)->create();
        factory(\App\Students::class, 50)->create();
        factory(\App\Grades::class, 8)->create();
        factory(\App\Studies::class, 100)->create();
    }
}
