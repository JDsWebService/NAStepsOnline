<?php

use Faker\Generator as Faker;

$autoIncrement = autoIncrementQuestions();

$factory->define(App\StepQuestion::class, function (Faker $faker) use ($autoIncrement) {
    // Generate Created At and Updated at DATETIME
	$DateTime = $faker->dateTime($max = 'now');

	// Get the next iteration of the autoIncrement Function
	$autoIncrement->next();

	// Assign the current $i value to a typecast variable.
	$order = (int) $autoIncrement->current();

    return [
        // Generate Dummy Data
    	'order' =>  $order,
        'question' => $faker->words(10, true) . "?",
        'created_at' => $DateTime,
        'updated_at' => $DateTime,
    ];
});

function autoIncrementQuestions()
{
	// Start a loop
    for ($i = 0; $i <= 3; $i++) {
        // Yield the current value of $i
        yield $i;
        // If $i is equal to 3, that must mean the start of a new loop
        if($i == 3) {
        	// Reset $i to 0 to start over.
			$i = 0;
		}
    }
}