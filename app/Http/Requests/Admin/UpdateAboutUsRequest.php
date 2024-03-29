<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsRequest extends FormRequest
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
            'image_title_en' => [
                'string',
                'max:200'
            ],
            'image_title_my' => [
                'string',
                'max:200'
            ],
            'image_title_ja' => [
                'string',
                'max:200'
            ],
            'image_description_en' => [],
            'image_description_my' => [],
            'image_description_ja' => [],
            'title_en' => [
                'string',
                'max:200'
            ],
            'title_my' => [
                'string',
                'max:200'
            ],
            'title_ja' => [
                'string',
                'max:200'
            ],
            'sub_title_en' => [],
            'sub_title_my' => [],
            'sub_title_ja' => [],
            'description_en' => [],
            'description_my' => [],
            'description_ja' => [],
           
        ];

        return $rules;
    }
}
