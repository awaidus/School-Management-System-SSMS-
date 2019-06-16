<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Person;
use App\User;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'father_name' => $faker->name('male'),
        'mother_name' => $faker->name('female'),
        'address' => $faker->address,
        'mobile_no' => $faker->phoneNumber,
        'phone_no' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
