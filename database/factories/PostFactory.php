<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
	$title  = $faker->sentence(4);
    return [
    	'user_id' => 1,
    	'category_id' => rand(1,3),
        'name' => $title,
        'slug' => Str::slug($title),
        'excerpt' => $faker->text(144),
       	'body' => $faker->text(1500),
       	'file' => $faker->imageUrl($width = 1200, $height = 600),
       	'featured' => $faker->imageUrl($width = 800, $height = 800)
    ];
});
