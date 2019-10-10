<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Person;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'race' => $faker->countryCode,
        'cat_rfid' => $faker->password
    ];
});
