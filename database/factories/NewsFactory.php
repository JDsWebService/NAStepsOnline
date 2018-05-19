<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
	$newsDateTime = $faker->dateTimeThisMonth();
    return [
        // Generate Dummy Data
        'title' => $faker->catchPhrase,
        'body' => implode(" ", $faker->paragraphs(5)),
        'created_at' => $newsDateTime,
        'updated_at' => $newsDateTime,
    ];
});