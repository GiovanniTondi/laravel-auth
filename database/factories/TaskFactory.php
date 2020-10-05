<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name'          => $faker -> word(),
        'description'   => $faker -> text(100),
        'price'         => $faker -> randomFloat(2, 100, 10000),
        'start_date'    => $faker -> date(),
        'end_date'      => $faker -> date()
    ];
});
