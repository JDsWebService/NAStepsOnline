<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\JustForToday;

class JFTFormRequest extends FormRequest
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
        $jft_id = $this->route('jft');

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
                    'title' => 'required|max:255',
                    'jft_page' => 'required|integer|unique:just_for_today,jft_page',
                    'month' => 'required',
                    'day' => 'required',
                    'bt_quote' => 'required',
                    'bt_page' => 'required|integer',
                    'body' => 'required',
                    'jft_end' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {   
                
                return [
                    'title' => 'required|max:255',
                    'jft_page' => 'required|integer|unique:just_for_today,jft_page,'. $jft_id,
                    'month' => 'required',
                    'day' => 'required',
                    'bt_quote' => 'required',
                    'bt_page' => 'required|integer',
                    'body' => 'required',
                    'jft_end' => 'required',
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
            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',
        ];
    }
}
