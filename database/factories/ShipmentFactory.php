<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shipment;
use Faker\Generator as Faker;

$factory->define(Shipment::class, function (Faker $faker) {
    return [
        'pid' => $faker->ean8, //usun po relacji
        'senderCity' => $faker->city,        
        'senderStreet' => $faker->streetName,
        'receiverCity' => $faker->city,
        'receiverStreet' => $faker->streetName,
    ];
});
