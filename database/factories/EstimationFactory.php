<?php

use Faker\Generator as Faker;

$factory->define(App\Estimation::class, function (Faker $faker) {
    return [
        'patient_id' 	=> rand(1,30),
        'subtotal' 		=> rand(400, 500),
        'balance'		=> rand(400, 500),
        'total'   		=> rand(400, 500),
    ];
});
