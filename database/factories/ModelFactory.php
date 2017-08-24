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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Client::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->company,
        'responsable' => $faker->name,
        'adress' => $faker->address,
        'phone' => mt_rand(),
        'nbTest' => rand(1,500),
    ];
});

$factory->define(App\Materiel::class, function (Faker\Generator $faker) {

    return [
        'departement' => rand(1,90),
        'logisticsChildAccountNumber' => mt_rand(),
        'CDV' => $faker->name,
        'IA' => $faker->name,
        'STC' => $faker->name,
        'account' => $faker->title,
        'installedProductID' => rand(1,500),
        'logiciel' => $faker->title,
    ];
});
