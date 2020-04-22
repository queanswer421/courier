<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Courier;
use Faker\Generator as Faker;

$factory->define(Courier::class, function (Faker $faker) {
    return [
        'trackNo' => $faker->ean13,
        'parcelWeight' => $faker->numberBetween(1, 100),
        'parcelDimensionLen' => $faker->numberBetween(1, 100),
        'parcelDimensionWidth' => $faker->numberBetween(1, 100),
        'parcelDimensionHeight' => $faker->numberBetween(1, 100),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
