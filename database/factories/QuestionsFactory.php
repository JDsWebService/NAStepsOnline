<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    // Generate Created At and Updated at DATETIME
	$DateTime = $faker->dateTimeThisMonth();


    return [
        // Generate Dummy Data
        'step_id' => App\Step::all()->random()->id,
        'question' => $faker->words(10, true) . '?',
        'created_at' => $DateTime,
        'updated_at' => $DateTime,
    ];
});
