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
                'required',
                'nullable',
                'integer'
            ],
            'title_en' => [
                'required'
            ],
            'title_my' => [
                'required'
            ],
            'title_ja' => [
                'required'
            ],
            'address_en' => [
                'required'
            ],
            'address_my' => [
                'required'
            ],
            'address_ja' => [
                'required'
            ],
            'phone_en' => [
                'required',
                'string',
                'max:200'
            ],
            'phone_my' => [
                'required',
                'string',
                'max:200'
            ],
            'phone_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'email_en' => [
                'required',
                'string',
                'max:200'
            ],
            'email_my' => [
                'required',
                'string',
                'max:200'
            ],
            'email_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'map_en' => [
                'required'
            ],
            'map_my' => [
                'required'
            ],
            'map_ja' => [
                'required'
            ]

        ];

        return $rules;
    }
}
