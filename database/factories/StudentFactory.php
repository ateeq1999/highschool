<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        // 'class_name_id' => $faker->rand(),
        // 'full_name' => $faker->name,
        // 'email' => $faker->email,
        // 'phone' => $faker->phoneNumber,
    ];
});
