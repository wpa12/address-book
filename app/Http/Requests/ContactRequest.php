<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'salutation' => 'string|required',
            'first_name' => 'string|required',
            'middle_name' => 'string|nullable',
            'last_name' => 'string|required',
            'dob'   => 'date|required',
            'gender' => 'string|required',
            'email' => 'email|required',
            'description' => 'string|required',
        ];
    }
}
