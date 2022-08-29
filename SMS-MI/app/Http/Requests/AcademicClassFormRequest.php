<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicClassFormRequest extends FormRequest
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
            'educational_stage_id' => 'required',
            'class_name'           => 'required',
            'class_numeric'        => 'required',
            'note'                 => 'required',
            'status'               => 'required|numeric',
        ];
    }

    public function messages()
    {
       return [
           'educational_stage_id.required' => 'please select this field',
           'class_name.required'           => 'class name required',
           'class_numeric.required'        => 'class numeric required ',
           'note.required'                 => 'note field required',
           'status.numeric'               => 'select one ',
       ];
    }
}
