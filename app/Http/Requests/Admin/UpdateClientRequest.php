<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
        $rules = [
            'service_id' => [
                'nullable',
                'integer'
            ],
            'name_en' => [
                'string',
                'max:200'
            ],
            'name_my' => [
                'string',
                'max:200'
            ],
            'name_ja' => [
                'string',
                'max:200'
            ],
            'description_en' => [],
            'description_my' => [],
            'description_ja' => [],
            'link' => [
                'string',
                'max:300'
            ],
            'image' => [
                'mimes:jpeg,jpg,png'
            ]
        ];

        return $rules;
    }
}
