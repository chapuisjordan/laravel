<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use forum\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'message' => $faker->text
    ];
});
