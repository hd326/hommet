<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Property::class, function (Faker $faker) {
    $cities = ['Roseville', 'Elk Grove', 'Rocklin', 'Citrus Heights'];
    $user = App\User::inRandomOrder()->first();
    return [
        'street_address' => $faker->streetAddress,
        'city' => $cities[array_rand($cities)],
        'zip' => $faker->postcode,
        'price' => round(rand(100000, 1000000)),
        'bedrooms' => rand(1, 3),
        'bathrooms' => rand(1, 3),
        'square_feet' => rand(3000, 5000),
        'lot_size' => rand(1000, 2500),
        'year_built' => rand(2010, 2019),
        'type' => 'Single Family Home',
        'sub_type' => 'Detached',
        'listing_status' => 'For Sale',
        'listing_number' => rand(190000, 199999),
        'county' => $faker->word(2), // we need to pick from an array of 5
        'neighborhood' => $faker->word(2),
        'fireplace' => 'No',
        'stories' => rand(1, 2),
        'garage' => rand(2,4),
        'parking_space' => rand(3,6),
        'utilities' => 'Cable Available, Electricity Available, Phone Available, Sewer Available, Water Available',
        'details' => $faker->text($maxNbChars = 400),
        'user_id' => rand(1,12)
    ];
});
