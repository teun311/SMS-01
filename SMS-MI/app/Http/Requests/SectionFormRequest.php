<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionFormRequest extends FormRequest
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
            'section_name'   => 'required',
            'capacity'       => 'required',
            'note'           => 'required',
            'status'         => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'section_name.required'   => 'please fillup section name field',
            'capacity.required'       => 'please fillup capacity field',
            'note.required'           => 'please fillup note field',
            'status.numeric'         => 'please select one ',
        ];
    }
}
