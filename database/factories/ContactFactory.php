<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(App\Models\Contact::class, function (Faker $faker) {
    return [

        'name'=> $faker->name,
        'telephone'=> $faker->phoneNumber,
        'email'=> $faker->email
    ];
});
