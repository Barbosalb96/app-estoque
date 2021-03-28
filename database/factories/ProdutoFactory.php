<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->words(3, true),
        'marca' => $faker->words(1, true),
        'categoria' => $faker->words(1, true),
        'descricao' => $faker->text,
        'quantidade' => $faker->randomNumber(),
        'custoMedio' => $faker->randomFloat(2, 10, 100),
        'valorTotal' => $faker->randomFloat(2, 10, 100),
    ];
});
