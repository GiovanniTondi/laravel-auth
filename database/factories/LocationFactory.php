<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'name'              => $faker -> word(),
        'state'             => $faker -> state(),
        'city'              => $faker -> city(),
        'street_name'       => $faker -> streetName(),
        'street_address'    => $faker -> streetAddress()
    ];
});
