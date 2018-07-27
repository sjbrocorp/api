<?php

use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {

    $sources = [
      'Email', 'Phone', 'Other'
    ];

    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'name' => $faker->name,
        'email' => $faker->email,
        'contact' => $faker->name,
        'telephone' => $faker->phoneNumber,
        'extension' => '+' . rand(0,9) . rand(0,9),
        'description' => $faker->paragraph,
        // Get random source from array
        'source' => $sources[array_rand($sources)]
    ];
});
