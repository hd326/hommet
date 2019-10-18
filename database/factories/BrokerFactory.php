<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Broker::class, function (Faker $faker) {
    return [
        'name' => $faker->word(2),
        'email_address' => 'r_duong89@yahoo.com',
        'phone_number' => $faker->phoneNumber,
        'street_address' => $faker->streetAddress,
    ];
});
 