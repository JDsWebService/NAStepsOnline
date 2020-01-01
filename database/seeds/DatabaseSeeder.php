<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Generate Dummy News Articles
        // factory(App\News::class, 50)->create();

        // Generate Dummy Steps
        // factory(App\Step::class, 12)->create();

        // Generate Dummy Categories
        // Run the factory 12 times
        // foreach(range(1, 12) as $i) {
        //     // Generate 5 entries each time
        //     factory(App\StepCategory::class, 5)->create([
        //         // Since all steps have a number 1-12 grab the step by the number column and get it's ID
        //         'step_id' => App\Step::where('number', '=', $i)->first()->id,
        //     ]);
        // }

        // Generate Dummy Sections
        // foreach(range(1, 60) as $i) {
        //     // Generate 2 entries each time
        //     factory(App\StepSection::class, 2)->create([
        //         // Since all steps have a number 1-12 grab the step by the number column and get it's ID
        //         'category_id' => App\StepCategory::where('id', '=', $i)->first()->id,
        //     ]);
        // }
        
        // Generate Dummy Questions
        // foreach(range(1, 120) as $i) {
        //     // Generate 3 entries each time
        //     factory(App\StepQuestion::class, 3)->create([
        //         // Since all steps have a number 1-12 grab the step by the number column and get it's ID
        //         'section_id' => App\StepSection::where('id', '=', $i)->first()->id,
        //     ]);
        // }
        
    }
}
