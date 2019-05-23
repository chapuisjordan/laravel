<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use forum\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'message' => $faker->text,
        'topic_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
