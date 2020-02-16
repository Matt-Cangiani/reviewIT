<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\articulos;
use Faker\Generator as Faker;

$factory->define(articulos::class, function (Faker $faker) {
    return [
        "usuario_id"=> App\user::all()->random()->id,
        'categoria_id' => App\Categories::all()->random()->id,
        "created_at"=> $faker->date(),
        "article"=> $faker->sentence(800),
        "descripcion"=> $faker->sentence (8),
          ];
});
