<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomeFormRequest extends FormRequest
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
                'required',
                'string',
                'max:200'
            ],
            'banner_text_en' => [
                'required'
            ],
            'small_text_myan' => [
                'required',
                'string',
                'max:200'
            ],
            'banner_text_myan' => [
                'required'
            ],
            'small_text_jp' => [
                'required',
                'string',
                'max:200'
            ],
            'banner_text_jp' => [
                'required'
            ],
            'image' => [
                'required',
                'mimes:jpeg,jpg,png'
            ]

        ];

        return $rules;
    }
}
