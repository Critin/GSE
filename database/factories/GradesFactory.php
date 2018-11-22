<?php

use Faker\Generator as Faker;

$factory->define(App\Grades::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Desarrollo de Aplicaciones Multiplataforma', 'Administración y Gestión', 'Actividades Comerciales', 'Mecatrónica', 'Administración de Sistemas Informáticos en Red', 'Automoción', 'Electricidad y Electrónica']),
        'level' => $faker->randomElement(['Básico', 'Medio', 'Superior']),
    ];
});
