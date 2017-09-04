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
use App\Contact;
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


$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [

        'prenom' => $faker->firstName,
        'nom' => $faker->lastName,
        'rue' => $faker->streetName,
        'numero' => $faker->buildingNumber,
        'codePostal' => $faker->postcode,
        'ville' => $faker->city,
        'numeroTel' => $faker->phoneNumber,
        'email' => $faker->email,
        'client' => $faker->boolean
    ];
});
