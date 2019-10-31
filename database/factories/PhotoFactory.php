<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\PropertyImages::class, function (Faker $faker) {
    return [
        'title' => $faker->word(1),
        'src' => '/images/'. rand(1,15). '.jpg',
        'mime_type' => $faker->word(1),
        'alt' => $faker->word(1),
        'description' => $faker->sentence,
        'property_id' => rand(1, 55)
    ];
});
