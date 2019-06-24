<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Attendance;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Attendance::class, function (Faker $faker) {
    return [
        'student_id' => function () {
            return factory(Student::class)->create()->id;
        },
        'working_day' => $faker->dateTimeBetween($startDate = '2019-01-01', $endDate = '2019-01-31', $timezone = null),
        'in_at' => $faker->dateTimeBetween($startDate = '2019-01-01', $endDate = '2019-01-31', $timezone = null),
        'out_at' => $faker->dateTimeBetween($startDate = '2019-01-01', $endDate = '2019-01-31', $timezone = null),
    ];
});
