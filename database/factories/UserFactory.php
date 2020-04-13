<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthday' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')
        ->format('d-m-Y'),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => 'password',
        'fake_token' => Str::random(30),
        'remember_token' => Str::random(10),
    ];
});
