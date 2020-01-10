<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RegexController extends Controller
{
    public function parseSWG() {
    	$path = storage_path() . "/app/public/swg.txt";
    	$content = File::get($path);

    	preg_match_all('/(.*?)~~~([\w ]+)~~~/s', $content, $matches);
		$parts = array_combine($matches[2], $matches[1]);

    	foreach($parts as $key => $value) {
    		Storage::put('/public/swg/' . $key . '.txt', $value);
    	}
    }

    public function parseStepQuestions() {
        // Setup the Directory
        $directory = storage_path() . "/app/public/swg";
        // Grab all the files in the directory
        $files = File::files($directory);
        // Define the Steps Array to store all the questions
        $stepsArray = [
            'Step 1' => [],
            'Step 2' => [],
            'Step 3' => [],
            'Step 4' => [],
            'Step 5' => [],
            'Step 6' => [],
            'Step 7' => [],
            'Step 8' => [],
            'Step 9' => [],
            'Step 10' => [],
            'Step 11' => [],
            'Step 12' => []
        ];

        // Loop through all the files
        foreach($files as $path) {
            // Grab all the pathInfo on the file
            $file = pathInfo($path);
            // Grab the filename
            $filename =  $file['basename'];

            // If the file isn't the Preface File
            if($filename != "Preface.txt") {

                // Define the Regex to extract the Step Number from the filename
                $stepNumberRegex = '/(Step \d+)\s(\d+)/m';
                
                // Grab the Step Number from the filename
                preg_match($stepNumberRegex, $filename, $matches);
                
                // Assign to variables
                $stepNumber = $matches[1];
                $stepSection = $matches[2];

                // Grab the content of the file
                $content = File::get($path);
                
                // Define the Regex of the questions
                $questionRegex = '/^==>\s([\w\d\s\'"]+\?)/m';
                
                // fetch All the questions in the file
                preg_match_all($questionRegex, $content, $matches);

                // If there are questions in the content
                if($matches[1] != []) {

                    // Define Questions Array
                    $questionsArray = [];

                    // Loop through matches and assign to questions variable
                    foreach($matches[1] as $question) {
                        array_push($questionsArray, $question);
                    }

                    // Push into the Steps array
                    $stepsArray[$stepNumber][$stepSection] = $questionsArray;
                    
                } // End if Matches are empty


            } // End if file isn't preface.txt

             
        } // End loop of all files
        


        // Put all the questions for each of the steps into a file
        foreach($stepsArray as $step => $sections) {
            // Create Unique Identifier for Question
            preg_match('/Step\s(\d+)/m', $step, $stepNumber);
           // Loop through all the sections
           foreach($sections as $section => $questions) {
                // Append the Section number to the end of the path and complete the extension
                $path = '/public/questions/' . $step . '/' . $section . '.txt';
                // Create the Questions String
                $questionsStr = "";
                // Loop through all the questions in the section
                foreach($questions as $key => $value) {
                    // Database Storage
                    $database = new Question;
                    $database->identifier = $stepNumber[1] . '-' . $section . '-' . $key;
                    $database->step = $stepNumber[1];
                    $database->section = $section;
                    $database->key = $key;
                    $database->question = $value;
                    $database->save();
                    
                    // store question into question string
                    if($key === array_key_last($questions)) {
                        $questionsStr .= $value;
                    } else {
                        $questionsStr .= $value . "\n";
                    }

                }
                // Save the Section Text File
                Storage::put($path, $questionsStr);
           }
        } 

        // Let User Know that Writing Complete
        echo "Done!";
        
    } // End function





}
