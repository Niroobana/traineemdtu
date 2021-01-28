<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingProgramstoreRequest extends FormRequest
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
            'program_name' => 'required',
            'date' => 'required',
            'location' => 'required',
            'program_type' => 'required',
            'duration' => 'required',
            'content' => 'required',
            'target_group' => 'required',
            'no_of_trainees' => 'required',
            'no_of_resources' => 'required',
            'no_of_staffs' => 'required',
        ];
    }
}
