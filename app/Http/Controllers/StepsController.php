<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Steps\StepOneControllerTrait;
use App\Http\Controllers\Steps\StepThreeControllerTrait;
use App\Http\Controllers\Steps\StepTwoControllerTrait;
use Illuminate\Http\Request;

class StepsController extends Controller
{

	use StepOneControllerTrait;
	use StepTwoControllerTrait;
    use StepThreeControllerTrait;

	// Steps Dashboard
    public function dashboard() {
    	return view('steps.dashboard');
    }

    // Steps Preface
    public function preface() {
    	return view('steps.preface');
    }
}
