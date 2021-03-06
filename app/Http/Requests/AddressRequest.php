<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'address_type_id' => 'numeric|required',
            'first_line'    => 'string|required',
            'second_line'   => 'string|nullable',
            'city'  => 'string|required',
            'postcode' => 'string|required',
            'region'    => 'string|required',

        ];
    }
}
