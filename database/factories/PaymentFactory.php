<?php

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'patient_id' 	=> rand(1,30),
        'estimation_id' => rand(1,50),
        'amount' 		=> rand(500,600),
        'comment' 		=> $faker->sentence,
    ];
});
