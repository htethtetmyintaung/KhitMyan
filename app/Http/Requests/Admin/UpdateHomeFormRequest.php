<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeFormRequest extends FormRequest
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
            'main_content_id' => [
                'nullable',
                'integer'
            ],
            'small_text_en' => [
                'string',
                'max:200'
            ],
            'banner_text_en' => [],
            'small_text_my' => [
                'string',
                'max:200'
            ],
            'banner_text_my' => [],
            'small_text_ja' => [
                'string',
                'max:200'
            ],
            'banner_text_ja' => [],
            'image' => [
                'mimes:jpeg,jpg,png'
            ]

        ];

        return $rules;
    }
}
