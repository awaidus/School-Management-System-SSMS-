<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Person;
use App\Student;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'mobile_no' => $faker->phoneNumber,
        'phone_no' => $faker->phoneNumber,
        'email' => $faker->email,
        'student_id' => function () {
            return factory(Student::class)->create()->id;
        },
    ];
});
