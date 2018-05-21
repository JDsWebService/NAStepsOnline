<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Grab the jft id from the route
        $step_id = $this->route('id');

        // Switch on the method
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'number' => 'required|unique:steps,number|integer',
                    'description' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {   
                
                return [
                    'number' => 'required|integer|unique:steps,number,'. $step_id,
                    'description' => 'required'
                ];
            }
            default:break;
        }
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'number.unique' => 'The Step has already been created. Use the edit page instead.',
            'description.required'  => 'A description is required',
        ];
    }
}
