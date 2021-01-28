<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursestoreRequest extends FormRequest
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
            'course_name' => 'required',
            'categary'=> 'required',
            'duration' => 'required',
            'course_type' => 'required',
            'target_group' => 'required',
            'description' => 'required',

            ];
    }
}
