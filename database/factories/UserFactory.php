<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    $path = storage_path('app/public/userFoto'); 


    return [
        'name' => $faker->name,
        'apellido' => $faker->lastName,

        'telefono' => $faker->phoneNumber,
        'direccion' => $faker->address,
        'ciudad' => $faker->city,
        'provincia' => $faker->city,
        'codigoPostal' => $faker->numberBetween(1000,9999),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'foto' => $faker->image($path, 48, 60,'people', false),
        'remember_token' => Str::random(10),
    ];
});  