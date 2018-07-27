<?php

use App\Message;
use App\Ticket;
use App\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'ticket_id' => function () {
            return factory(Ticket::class)->create();
        },
        'user_id' => function () {
            return factory(User::class)->create();
        },
        'body' => $faker->paragraph
    ];
});
