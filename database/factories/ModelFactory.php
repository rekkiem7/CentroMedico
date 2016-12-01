<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Region::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'nombre' => $faker->name,
        'visible' => $faker->name
    ];
});

$factory->define(App\Comuna::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'nombre' => $faker->name,
        'id_region' => $faker->name,
        'visible' => $faker->name
    ];
});

$factory->define(App\Clinica::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'nombre' => $faker->name,
        'id_comuna' => $faker->name,
        'visible' => $faker->name
    ];
});

$factory->define(App\Especialidad::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'nombre' => $faker->name,
        'id_clinica' => $faker->name,
        'visible' => $faker->name
    ];
});

$factory->define(App\Especialista::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'nombre' => $faker->name,
        'id_especialidad' => $faker->name,
        'visible' => $faker->name
    ];
});

$factory->define(App\PlanificacionHora::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->name,
        'fecha' => $faker->name,
        'desde' => $faker->name,
        'hasta' => $faker->name,
        'id_especialista' => $faker->name,
        'id_clinica' => $faker->name,
        'user_auth' => $faker->name,
        'estado' => $faker->name,
        'visible' => $faker->name
    ];
});
