<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJustForTodayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('just_for_today', function (Blueprint $table) {
            // Create the Just For Today Table
            $table->increments('id');
            $table->string('title');
            $table->integer('jft_page')->unsigned()->unique();
            $table->date('date')->unique();
            $table->text('bt_quote');
            $table->integer('bt_page')->unsigned();
            $table->text('body');
            $table->text('jft_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop table
        Schema::dropIfExists('just_for_today');
    }
}
