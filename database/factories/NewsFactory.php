<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
	// Generate Created At and Updated at DATETIME
	$DateTime = $faker->dateTimeThisMonth();

	// Generate Title
	$title = $faker->catchPhrase;

	// Generate Slug
    $slug = preg_replace('#[ -]+#', '-', $title);

    // Trim the slug of the article to 240 characters
    $slug = substr($slug, 0, 239);

    return [
        // Generate Dummy Data
        'title' => $title,
        'body' => implode(" ", $faker->paragraphs(5)),
        'slug' => $slug,
        'hits' => $faker->numberBetween(1, 1000),
        'created_at' => $DateTime,
        'updated_at' => $DateTime,
    ];
});