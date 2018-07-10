<?php

use Faker\Generator as Faker;

//allow us to generate fake model data
$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        //
        'title' => substr($faker->sentence(2), 0, -1),
        'body' => $faker->paragraph,
        'user_id'=>$faker->numberBetween(2,10),
    ];
});
