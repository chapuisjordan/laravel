<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        'destination' => $faker->address,
        'description' => $faker->text,
        'prix' => $faker->randomDigit,
        'image' => $faker->imageUrl($width = 640, $height = 480, 'city'),
        'titre' => $faker->name,
    ];
});
