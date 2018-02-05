<?php

use Faker\Generator as Faker;

$factory->define(App\Treatment::class, function (Faker $faker) {
    return [
        'name'		=> $faker->sentence,
        'amount'	=> rand(300, 400)
    ];
});
