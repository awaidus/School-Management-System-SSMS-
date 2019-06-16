<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Student;
use App\Person;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'parent_id' => function () {
            return factory(Person::class)->create()->id;
        },
        'roll_no' => $faker->numerify('ST-####'),
        'dob' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years', $timezone = null),
        'doa' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
    ];
});
