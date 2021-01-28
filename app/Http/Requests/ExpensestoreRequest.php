<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpensestoreRequest extends FormRequest
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
            'program_id'=> 'required',
            'program_name'=> 'required',
            'stationary'=> 'required',
            'accommodation'=> 'required',
            'refreshment'=> 'required',
            'total_amount'=> 'required',
    
        ];
    }
}
