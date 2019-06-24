<?php

/* @var $factory Factory */

use Faker\Generator as Faker;
use App\Parents;
use App\User;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Parents::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'father_name' => $faker->name('male'),
        'mother_name' => $faker->name('female'),
        'address' => $faker->address,
        'phone_no' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
