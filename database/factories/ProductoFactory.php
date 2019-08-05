<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(producto::class, function (Faker $faker) {

    $path = storage_path('app/public/producto');

    $tamanos = ["S","M","L", "XL","UNICO"];
    $colores = ["white","black","grey","red","blue","yellow","green","brown"];

    return [
    'categoria_id' => $faker->numberBetween(1,6),
    'nombre' => $faker->sentence(1),
    'descripcion' => $faker->sentence(20),
    'precio'=>$faker->randomFloat(2, 300, 4000),
    'imagen'=> $faker->image($path, 340, 425,'fashion', false),
    'stock' => $faker->numberBetween(10,60),
    'tamano' => $tamanos[rand(0,4)],
    'color' => $colores[rand(0,7)]
    ];
});
