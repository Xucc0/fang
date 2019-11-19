<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    return [
        //
        'cid' => mt_rand(2,6),
        'title' => $faker->sentence(),
        'desn' => $faker->sentence(),
        'body'    => $faker->text(),
    ];
});
