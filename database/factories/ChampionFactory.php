<?php

use Faker\Generator as Faker;

$factory->define(App\Champion::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify($faker->name . ' ###'),
        'type_id' => $faker->numberBetween($min = 1, $max = 7),
        'line_id' => $faker->numberBetween($min = 1, $max = 4)
    ];
});
