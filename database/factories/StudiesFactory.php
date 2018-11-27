<?php

use Faker\Generator as Faker;

$factory->define(App\Studies::class, function (Faker $faker) {
    return [
        'id_student' => \App\Students::all()->random()->id,
        'id_grade' => \App\Grades::all()->random()->id,
    ];
});
