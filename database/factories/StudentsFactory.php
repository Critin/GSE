<?php

use Faker\Generator as Faker;

$factory->define(App\Students::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Cristian', 'Álvaro', 'Manuel', 'Jose', 'Luis', 'Sara', 'Paloma']),
        'lastname' => $faker->randomElement(['Guerrero', 'Cerviño', 'Reina', 'Mosquera', 'Gautier', 'Ocaña', 'Madariaga']),
        'age' => $faker->randomElement([20, 24, 19, 21]),
    ];
});
