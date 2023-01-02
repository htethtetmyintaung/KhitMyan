<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
        $rules =  [
            'main_content_id' => [
                'nullable',
                'integer'
            ],
            'address_en' => [
                'required'
            ],
            'address_myan' => [
                'required'
            ],
            'address_jp' => [
                'required'
            ],
            'phone' => [
                'required',
                'string',
                'max:200'
            ],
            'email' => [
                'required',
                'string',
                'max:200'
            ],
            'map' => [
                'required'
            ]
        ];

        return $rules;
    }
}
