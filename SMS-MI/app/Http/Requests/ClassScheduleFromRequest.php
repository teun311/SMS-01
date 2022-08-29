<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassScheduleFromRequest extends FormRequest
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
        return [
            'starting_time' =>  'required',
            'ending_time' =>  'required',
            'status' =>  'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'starting_time.required'            =>  'This field is required',
            'ending_time.required'              =>  'This field is required',
            'status.numeric'                   =>  'Please select one',
        ];
    }
}
