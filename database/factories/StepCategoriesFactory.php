<?php

use Faker\Generator as Faker;

$autoIncrement = autoIncrementCategories();

$factory->define(App\StepCategory::class, function (Faker $faker) use ($autoIncrement) {
    // Generate Created At and Updated at DATETIME
	$DateTime = $faker->dateTime($max = 'now');

	// Get the next iteration of the autoIncrement Function
	$autoIncrement->next();
	// Assign the current $i value to a typecast variable.
	$order = (int) $autoIncrement->current();


    return [
        // Generate Dummy Data
    	'order' =>  $order,
        'name' => $faker->words(4, true),
        'created_at' => $DateTime,
        'updated_at' => $DateTime,
    ];
});

function autoIncrementCategories()
{
	// Start a loop
    for ($i = 0; $i <= 5; $i++) {
        // Yield the current value of $i
        yield $i;
        // If $i is equal to 5, that must mean the start of a new loop
        if($i == 5) {
        	// Reset $i to 0 to start over.
			$i = 0;
		}
    }
}