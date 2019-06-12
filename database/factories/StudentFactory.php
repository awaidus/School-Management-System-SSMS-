<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'roll_no' => $faker->numerify('ST-####'),
        'dob' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years', $timezone = null),
        'doa' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
    ];
});
