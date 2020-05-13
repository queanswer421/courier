<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\History;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(History::class, function (Faker $faker) {
    $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-30 days', '+30 days')->getTimestamp());
    $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $startDate)->addHour($faker->numberBetween( 1, 8 ))->addMinutes(0);
    return [
        'pid'=> $faker->ean8,
        'h1'=> $startDate,
        'h2'=> $endDate,
        'h3'=> $faker->dateTime(),
        'h4'=> $faker->dateTime(),
        'h5'=> $faker->dateTime(),
        'h6'=> $faker->dateTime(),
    ];
});
