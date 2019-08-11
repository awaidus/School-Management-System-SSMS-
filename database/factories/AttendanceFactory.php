<?php

/* @var $factory Factory */

use App\Attendance;
use App\Student;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Attendance::class, function (Faker $faker) {
    return [
        'student_id' => function () {
            return factory(Student::class)->create()->id;
        },
        'working_day' => $faker->dateTimeBetween($startDate = '2019-01-01', $endDate = '2019-01-31', $timezone = null),
        'in_at' => $faker->time($format = 'H:i:s', $max = '08:45:00'),
        'out_at' => $faker->time($format = 'H:i:s', $max = '14:15:00'),
//        'absence_reason' => $faker->sentence(4),
    ];
});
