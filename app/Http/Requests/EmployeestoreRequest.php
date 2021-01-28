<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeestoreRequest extends FormRequest
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
                'employee_role' => 'required',
                'first_Name' => 'required',
                'last_Name' => 'required',
                'gender' => 'required',
                'nic' => 'required','regex:/^[0-9]{9}[A-Z]$/',
                'email' => 'required',
                'designation' => 'required',
                'address' => 'required',
                'department' => 'required',
                 'mobile_no' => 'required',
                 'grade'=> 'required',
                 'experience'=> 'required',
            
        ];
    }
}
