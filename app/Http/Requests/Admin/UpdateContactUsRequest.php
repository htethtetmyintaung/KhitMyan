<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactUsRequest extends FormRequest
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
            'title_en' => [],
            'title_my' => [],
            'title_ja' => [],
            'address_en' => [],
            'address_my' => [],
            'address_ja' => [],
            'phone' => [
                'string',
                'max:200'
            ],
            'email' => [
                'string',
                'max:200'
            ],
            'map' => []
        ];

        return $rules;
    }
}
