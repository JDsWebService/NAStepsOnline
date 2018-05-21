<?php

use Faker\Generator as Faker;

$factory->define(App\Step::class, function (Faker $faker) {

	// Generate Created At and Updated at DATETIME
	$DateTime = $faker->dateTimeThisMonth();


    return [
        // Generate Dummy Data
        'number' => $faker->unique()->numberBetween(1, 12),
        'description' => $faker->words(10, true),
        'created_at' => $DateTime,
        'updated_at' => $DateTime,
    ];
});
