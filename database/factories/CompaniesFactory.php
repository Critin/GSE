<?php

use Faker\Generator as Faker;

$factory->define(App\Companies::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Electrónicos S.A.', 'Developers S.L.', 'Inditex', 'Cableados', 'Ford', 'El Corte Inglés', 'Hospital Puerta del Mar']),
        'city' => $faker->randomElement(['Cádiz', 'Málaga', 'Sevilla', 'Jaen', 'Almería', 'Huelva', 'Córdoba', 'Granada']),
        'pc' => $faker->randomElement(['11023', '32004', '23007']),
    ];
});
