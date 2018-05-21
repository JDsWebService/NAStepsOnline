<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Tell the model what table to use
    protected $table = 'questions';

    // Define the relationship between steps and questions
    public function step() {
    	return $this->belongsTo('App\Step');
    }
}
