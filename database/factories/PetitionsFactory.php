<?php

use Faker\Generator as Faker;

$factory->define(App\Petitions::class, function (Faker $faker) {
    return [
        'id_company' => \App\Companies::all()->random()->id,
        'id_grade' => \App\Grades::all()->random()->id,
        'type' => $faker->randomElement(['Informática', 'Comercio', 'Administración', 'Mecánica']),
        'n_students' => random_int(1,2),
    ];
});
