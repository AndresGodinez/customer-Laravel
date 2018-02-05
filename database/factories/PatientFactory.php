<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'name' 		=> $faker->name,
        'address' 	=> $faker->address,
        'telephone' => $faker->phoneNumber,
        'photo' 		=> $faker->imageUrl($width = 400, $height = 400),
        'bloodType' => $faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-']),
        'alergy' 	=>$faker->sentence,

    ];
});
