<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
                'required',
                'nullable',
                'integer'
            ],
            'image_title_en' => [
                'required',
                'string',
                'max:200'
            ],
            'image_title_my' => [
                'required',
                'string',
                'max:200'
            ],
            'image_title_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'image_description_en' => [
                'required'
            ],
            'image_description_my' => [
                'required'
            ],
            'image_description_ja' => [
                'required'
            ],
            'title_en' => [
                'required',
                'string',
                'max:200'
            ],
            'title_my' => [
                'required',
                'string',
                'max:200'
            ],
            'title_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'sub_title_en' => [
                'required'
            ],
            'sub_title_my' => [
                'required'
            ],
            'sub_title_ja' => [
                'required'
            ],
            'description_en' => [
                'required'
            ],
            'description_my' => [
                'required'
            ],
            'description_ja' => [
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
