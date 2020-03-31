<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permit;
use Faker\Generator as Faker;

$factory->define(Permit::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->word
    ];
});
