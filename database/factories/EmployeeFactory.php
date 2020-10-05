<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name'          => $faker -> firstname(),
        'lastname'      => $faker -> lastname(),
        'birthday'      => $faker -> date(),
        'personal_code' => $faker -> isbn13()
    ];
});
