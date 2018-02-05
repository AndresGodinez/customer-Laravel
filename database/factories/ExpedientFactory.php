<?php

use Faker\Generator as Faker;

$factory->define(App\Expedient::class, function (Faker $faker) {
    return [
        'patient_id' => rand(1,30),
        'photo'  	 => $faker->imageUrl($width = 400, $height = 400),
        
    ];
});
