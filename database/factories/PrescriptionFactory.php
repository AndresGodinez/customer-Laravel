<?php

use Faker\Generator as Faker;

$factory->define(App\Prescription::class, function (Faker $faker) {
    return [
        'patient_id' => rand(1,30),
        'body'		 => $faker->sentence,
    ];
});
