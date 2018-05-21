<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    // Tell the model what table to use
    protected $table = 'steps';

    // Define the relationship between steps and questions
    public function questions() {
    	return $this->hasMany('App\Question');
    }
}
