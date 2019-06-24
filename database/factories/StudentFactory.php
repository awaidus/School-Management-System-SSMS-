<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Student;
use App\Parents;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'parent_id' => function () {
            return factory(Parents::class)->create()->id;
        },
        'roll_no' => $faker->numerify('ST-####'),
        'dob' => $faker->date(),
        'doa' => $faker->date(),
    ];
});
