<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Agent::class, function (Faker $faker) {
    return [
        // agent_id name phone_number broker_id
        'name' => $faker->name,
        'email_address' => 'r_duong89@yahoo.com',
        'phone_number' => $faker->phoneNumber,
        'broker_id' => rand(1, 4),
    ];
});
