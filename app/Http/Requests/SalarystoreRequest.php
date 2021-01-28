<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalarystoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_id'=> 'required',
            'employee_name'=> 'required',
            'employee_role'=> 'required',
            'hours'=> 'required',
            'days'=> 'required',
            'gross_salary'=> 'required',
            'total_amount'=> 'required',
        ];
    }
}
