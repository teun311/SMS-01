<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicYearFormRequest extends FormRequest
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
            'session_year_start'    => 'required' ,
            'session_year_end'      => 'required' ,
            'session_month_start'   => 'required' ,
            'session_month_end'     => 'required' ,
            'status'                => 'required|numeric' ,
        ];
    }

    public function message()
    {
        return [
          'session_year_start.required'    => 'required',
          'session_year_end.required'      => 'required',
          'session_month_start.required'   => 'required',
          'session_month_end.required'     => 'required',
          'status.numeric'                => 'select one ',
        ];
    }
}
