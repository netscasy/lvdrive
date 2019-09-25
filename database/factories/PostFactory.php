<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text($maxNbChars = 300),
        // 'user_id' => function () {
        //     return factory(App\User::class)->create()->id;
        // }
        
    ];
});
